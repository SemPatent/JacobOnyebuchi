<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 5/24/14
 * Time: 11:05 AM
 */
$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="jacobpractical"; // Database name
$tbl_name="begin"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$Begin=$_POST["txtBegin"];
$beginsyn1=$_POST["txtbeginsyn1"];
$beginsyn2=$_POST["txtbeginsyn2"];
$beginsyn3=$_POST["txtbeginsyn3"];
$beginsyn4=$_POST["txtbeginsyn4"];
$beginsyn5=$_POST["txtbeginsyn5"];
$beginsyn6=$_POST["txtbeginsyn6"];
$beginsyn7=$_POST["txtbeginsyn7"];
$beginsyn8=$_POST["txtbeginsyn8"];

$sql="INSERT INTO $tbl_name(Begin,begin_syn_1,begin_syn_2,begin_syn_3,begin_syn_4,begin_syn_5,begin_syn_6,begin_syn_7,begin_syn_8)
            VALUES('$Begin','$beginsyn1','$beginsyn2','$beginsyn3','$beginsyn4','$beginsyn5','$beginsyn6','$beginsyn7','$beginsyn8'
            )";

$result=mysql_query($sql);

// if successfully insert data into database
if($result){
    header("location:managebegin.php");
}
else{
    die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='managebegin.php'> <em> VIEW BEGIN </em> </a>";
}

mysql_close($conn);

?>
