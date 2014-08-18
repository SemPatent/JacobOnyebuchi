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
$db_name="JacobpracticalFrench"; // Database name
$tbl_name="abat"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$Abat=$_POST["txtAbat"];
$abatsyn1=$_POST["txtabatsyn1"];
$abatsyn2=$_POST["txtabatsyn2"];
$abatsyn3=$_POST["txtabatsyn3"];
$abatsyn4=$_POST["txtabatsyn4"];
$abatsyn5=$_POST["txtabatsyn5"];
$abatsyn6=$_POST["txtabatsyn6"];
$abatsyn7=$_POST["txtabatsyn7"];
$abatsyn8=$_POST["txtabatsyn8"];
$abatsyn9=$_POST["txtabatsyn9"];
$abatsyn10=$_POST["txtabatsyn10"];
$abatsyn11=$_POST["txtabatsyn11"];
$abatsyn12=$_POST["txtabatsyn12"];
$abatsyn13=$_POST["txtabatsyn13"];


$sql="INSERT INTO $tbl_name(Abat,abat_syn_1,abat_syn_2,abat_syn_3,abat_syn_4,abat_syn_5,abat_syn_6,abat_syn_7,abat_syn_8,abat_syn_9,abat_syn_10,abat_syn_11,abat_syn_12,abat_syn_13)
            VALUES('$Abat','$abatsyn1','$abatsyn2','$abatsyn3','$abatsyn4','$abatsyn5','$abatsyn6','$abatsyn7','$abatsyn8'
            ,'$abatsyn9','$abatsyn10','$abatsyn11','$abatsyn12','$abatsyn13')";

$result=mysql_query($sql);

// if successfully insert data into database
if($result){
    header("location:manageabat.php");
}
else{
    die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='manageabat.php'> <em> VIEW ABAT </em> </a>";
}

mysql_close($conn);

?>
