<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 5/24/14
 * Time: 6:00 PM
 */
$id = $_GET['id'];

$sqlhost ="127.0.0.1"; // Host name
$sqlusername ="root"; // Mysql username
$sqlpassword =""; // Mysql password
$db_name="jacobpractical"; // Database name
$tbl_name="fantastic"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

$sql = "DELETE FROM $tbl_name WHERE fantastic='$id' ";

$result=mysql_query($sql);

// if successfully insert data into database, go to login page.
if($result){
    header("location:managefantastic.php");
}
else{
    die("ERROR DELETING FANTASTIC:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo " <a href='managefantastic.php'> <em> GO TO FANTASTIC </em> </a>";
}

mysql_close($conn);
?>
