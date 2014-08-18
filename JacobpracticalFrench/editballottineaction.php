<?php

    $id = $_GET['id'];

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

$sql = "UPDATE $tbl_name SET Begin = '$Begin', begin_syn_1='$beginsyn1', begin_syn_2='$beginsyn2', begin_syn_3='$beginsyn3', begin_syn_4='$beginsyn4', begin_syn_5='$beginsyn5'
     , about_syn_6='$beginsyn6', begin_syn_7='$beginsyn7', begin_syn_8='$beginsyn8' WHERE begin='$id'";


$result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managebegin.php");
    }
    else{
        die("ERROR EDITTING BEGIN:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managebegin.php'> <em> GO TO BEGIN </em> </a>";
    }

    mysql_close($conn);
?>
