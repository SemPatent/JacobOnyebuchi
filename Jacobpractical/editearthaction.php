<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 6/1/14
 * Time: 4:43 PM
 */
$id = $_GET['id'];

$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="jacobpractical"; // Database name
$tbl_name="earth"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$Earth=$_POST["txtEarth"];
$earthsyn1=$_POST["txtearthsyn1"];
$earthsyn2=$_POST["txtearthsyn2"];
$earthsyn3=$_POST["txtearthsyn3"];
$earthsyn4=$_POST["txtearthsyn4"];
$earthsyn5=$_POST["txtearthsyn5"];
$earthsyn6=$_POST["txtearthsyn6"];
$earthsyn7=$_POST["txtearthsyn7"];
$earthsyn8=$_POST["txtearthsyn8"];
$earthsyn9=$_POST["txtearthsyn9"];

$sql = "UPDATE $tbl_name SET Earth = '$Earth',earth_syn_1='$earthsyn1',earth_syn_2='$earthsyn2',earth_syn_3='$earthsyn3',earth_syn_4='$earthsyn4',earth_syn_5='$earthsyn5'
 ,earth_syn_6='$earthsyn6',earth_syn_7='$earthsyn7',earth_syn_8='$earthsyn8',earth_syn_9='$earthsyn9' WHERE earth='$id'";

$result=mysql_query($sql);

// if successfully insert data into database, go to login page.
if($result){
    header("location:manageearth.php");
}
else{
    die("ERROR EDITTING EARTH:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='manageearth.php'> <em> GO TO EARTH </em> </a>";
}

mysql_close($conn);
?>
