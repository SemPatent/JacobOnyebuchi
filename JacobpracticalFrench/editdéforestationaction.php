<?php

$id = $_GET['id'];

$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="jacobpracticalfrench"; // Database name
$tbl_name="déforestation"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$Déforestation=$_POST["txtDéforestation"];
$déforestationsyn1=$_POST["txtdéforestationsyn1"];
$déforestationsyn2=$_POST["txtdéforestationsyn2"];

$sql = "UPDATE $tbl_name SET Déforestation = '$Déforestation', déforestatione_syn_1='$déforestationsyn1', déforestation_syn_2='$déforestationsyn2' WHERE déforestation='$id'";

$result=mysql_query($sql);

// if successfully insert data into database, go to login page.
if($result){
    header("location:managedéforestation.php");
}
else{
    die("ERROR EDITTING DÉFORESTATION:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='managedéforestation.php'> <em> GO TO DÉFORESTATION </em> </a>";
}

mysql_close($conn);
?>
