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
$db_name="jacobpracticalfrench"; // Database name
$tbl_name="ballottine"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$Ballottine=$_POST["txtBallottine"];
$ballottinesyn1=$_POST["txtballottinesyn1"];
$ballottinesyn2=$_POST["txtballottinesyn2"];

$sql="INSERT INTO $tbl_name(Ballottine,ballottine_syn_1,ballottine_syn_2)
            VALUES('$Ballottine','$ballottinesyn1','$ballottinesyn2'
            )";

$result=mysql_query($sql);

// if successfully insert data into database
if($result){
    header("location:manageballottine.php");
}
else{
    die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='manageballottine.php'> <em> VIEW BALLOTTINE </em> </a>";
}

mysql_close($conn);

?>
