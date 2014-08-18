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

$sql="INSERT INTO $tbl_name(Dedicate,dedicate_syn_1,dedicate_syn_2,dedicate_syn_3,dedicate_syn_4)
            VALUES('$Dedicate','$dedicatesyn1','$dedicatesyn2','$dedicatesyn3','$dedicatesyn4')";

$result=mysql_query($sql);

// if successfully insert data into database
if($result){
    header("location:managededicate.php");
}
else{
    die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='managededicate.php'> <em> VIEW DEDICATE </em> </a>";
}

mysql_close($conn);

?>
