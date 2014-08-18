<?php

$id = $_GET['id'];

$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="jacobpractical"; // Database name
$tbl_name="dedicate"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$Dedicate=$_POST["txtDedicate"];
$dedicatesyn1=$_POST["txtdedicatesyn1"];
$dedicatesyn2=$_POST["txtdedicatesyn2"];
$dedicatesyn3=$_POST["txtdedicatesyn3"];
$dedicatesyn4=$_POST["txtdedicatesyn4"];

$sql = "UPDATE $tbl_name SET Dedicate = '$Dedicate', dedicate_syn_1='$dedicatesyn1', dedicate_syn_2='$dedicatesyn2', dedicate_syn_3='$dedicatesyn3', dedicate_syn_4='$dedicatesyn4' WHERE dedicate='$id'";

$result=mysql_query($sql);

// if successfully insert data into database, go to login page.
if($result){
    header("location:managededicate.php");
}
else{
    die("ERROR EDITTING DEDICATE:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='managededicate.php'> <em> GO TO DEDICATE </em> </a>";
}

mysql_close($conn);
?>
