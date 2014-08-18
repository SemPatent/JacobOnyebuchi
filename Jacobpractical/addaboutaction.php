<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 5/24/14
 * Time: 5:56 PM
 */
$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="jacobpractical"; // Database name
$tbl_name="about"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$About=$_POST["txtAbout"];
$aboutsyn1=$_POST["txtaboutsyn1"];
$aboutsyn2=$_POST["txtaboutsyn2"];
$aboutsyn3=$_POST["txtaboutsyn3"];
$aboutsyn4=$_POST["txtaboutsyn4"];
$aboutsyn5=$_POST["txtaboutsyn5"];
$aboutsyn6=$_POST["txtaboutsyn6"];
$aboutsyn7=$_POST["txtaboutsyn7"];
$aboutsyn8=$_POST["txtaboutsyn8"];
$aboutsyn9=$_POST["txtaboutsyn9"];


$sql="INSERT INTO $tbl_name(About,about_syn_1,about_syn_2,about_syn_3,about_syn_4,about_syn_5,about_syn_6,about_syn_7,about_syn_8,about_syn_9)
            VALUES('$About','$aboutsyn1','$aboutsyn2','$aboutsyn3','$aboutsyn4','$aboutsyn5','$aboutsyn6','$aboutsyn7','$aboutsyn8'
            ,'$aboutsyn9')";

$result=mysql_query($sql);

// if successfully insert data into database
if($result){
    header("location:manageabout.php");
}
else{
    die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='manageabout.php'> <em> VIEW ABOUT </em> </a>";
}

mysql_close($conn);

?>
