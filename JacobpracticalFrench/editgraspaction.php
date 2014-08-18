<?php

    $id = $_GET['id'];

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="jacobpractical"; // Database name
    $tbl_name="grasp"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
$Grasp=$_POST["txtGrasp"];
$graspsyn1=$_POST["txtgraspsyn1"];
$graspsyn2=$_POST["txtgraspsyn2"];
$graspsyn3=$_POST["txtgraspsyn3"];
$graspsyn4=$_POST["txtgraspsyn4"];
$graspsyn5=$_POST["txtgraspsyn5"];
$graspsyn6=$_POST["txtgraspsyn6"];
$graspsyn7=$_POST["txtgraspsyn7"];
$graspsyn8=$_POST["txtgraspsyn8"];
$graspsyn9=$_POST["txtgraspsyn9"];
$graspsyn10=$_POST["txtgraspsyn10"];

$sql = "UPDATE $tbl_name SET Grasp = '$Grasp', grasp_syn_1='$graspsyn1', grasp_syn_2='$graspsyn2', grasp_syn_3='$graspsyn3', grasp_syn_4='$graspsyn4', grasp_syn_5='$graspsyn5'
 , grasp_syn_6='$graspsyn6', grasp_syn_7='$graspsyn7', grasp_syn_8='$graspsyn8', grasp_syn_9='$graspsyn9', grasp_syn_10='$graspsyn10' WHERE grasp='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managegrasp.php");
    }
    else{
        die("ERROR EDITTING GRASP:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managegrasp.php'> <em> GO TO GRASP </em> </a>";
    }

    mysql_close($conn);
?>
