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

$sql="INSERT INTO $tbl_name(Déforestation,déforestation_syn_1,déforestation_syn_2)
            VALUES('$Déforestation','$déforestationsyn1','$déforestationsyn2')";

$result=mysql_query($sql);

// if successfully insert data into database
if($result){
    header("location:managedéforestation.php");
}
else{
    die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='managedéforestation.php'> <em> VIEW DÉFORESTATION </em> </a>";
}

mysql_close($conn);

?>
