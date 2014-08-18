<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 6/1/14
 * Time: 4:35 PM
 */
$id = $_GET['id'];

$sqlhost ="127.0.0.1"; // Host name
$sqlusername ="root"; // Mysql username
$sqlpassword =""; // Mysql password
$db_name="jacobonyebuchi"; // Database name
$tbl_name="earth"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

$sql = "DELETE FROM $tbl_name WHERE earth='$id' ";

$result=mysql_query($sql);

// if successfully insert data into database, go to login page.
if($result){
    header("location:manageearth.php");
}
else{
    die("ERROR DELETING EARTH" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo " <a href='manageearth.php'> <em> GO TO EARTH</em> </a>";
}

mysql_close($conn);
?>
