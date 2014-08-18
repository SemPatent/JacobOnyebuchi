<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 5/24/14
 * Time: 6:02 PM
 */
$id = $_GET['id'];

$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="jacobpractical"; // Database name
$tbl_name="fantastic"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$Fantastic=$_POST["txtFantastic"];
$fantasticsyn1=$_POST["txtfantasticsyn1"];
$fantasticsyn2=$_POST["txtfantasticsyn2"];
$fantasticsyn3=$_POST["txtfantasticsyn3"];
$fantasticsyn4=$_POST["txtfantasticsyn4"];
$fantasticsyn5=$_POST["txtfantasticsyn5"];
$fantasticsyn6=$_POST["txtfantasticsyn6"];
$fantasticsyn7=$_POST["txtfantasticsyn7"];
$fantasticsyn8=$_POST["txtfantasticsyn8"];
$fantasticsyn9=$_POST["txtfantasticsyn9"];

$sql = "UPDATE $tbl_name SET Fantastic = '$Fantastic', fantastic_syn_1='$fantasticsyn1', fantastic_syn_2='$fantasticsyn2', fantastic_syn_3='$fantasticsyn3', fantastic_syn_4='$fantasticsyn4', fantastic_syn_5='$fantasticsyn5'
 , fantastic_syn_6='$fantasticsyn6', fantastic_syn_7='$fantasticsyn7', fantastic_syn_8='$fantasticsyn8', fantastic_syn_9='$fantasticsyn9' WHERE fantastic  ='$id'";

$result=mysql_query($sql);

// if successfully insert data into database, go to login page.
if($result){
    header("location:managefantastic.php");
}
else{
    die("ERROR EDITTING FANTASTIC:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='managefantastic.php'> <em> GO TO FANTASTIC </em> </a>";
}

mysql_close($conn);
?>
