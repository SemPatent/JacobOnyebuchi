<?php

    $id = $_GET['id'];

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="jacobpractical"; // Database name
    $tbl_name="connect"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
$connect=$_POST["txtconnect"];
$connectsyn1=$_POST["txtconnectsyn1"];
$connectsyn2=$_POST["txtconnectsyn2"];
$connectsyn3=$_POST["txtconnectsyn3"];
$connectsyn4=$_POST["txtconnectsyn4"];
$connectsyn5=$_POST["txtconnectsyn5"];
$connectsyn6=$_POST["txtconnectsyn6"];
$connectsyn7=$_POST["txtconnectsyn7"];
$connectsyn8=$_POST["txtconnectsyn8"];
$connectsyn9=$_POST["txtconnectsyn9"];
$connectsyn10=$_POST["txtconnectsyn10"];
$connectsyn11=$_POST["txtconnectsyn11"];
$connectsyn12=$_POST["txtconnectsyn12"];

    $sql = "UPDATE $tbl_name SET Connect = '$Connect',connect_syn_1='$connectsyn1',connect_syn_2='$connectsyn2',connecnt_syn_3='$connectsyn3',connect_syn_4='$connectsyn4',connect_syn_5='$connectsyn5'
 ,connect_syn_6='$connectsyn6',connect_syn_7='$connectsyn7',connect_syn_8='$connectsyn8',connect_syn_9='$connectsyn9',connect_syn_10='$connectsyn10',connect_syn_11='$connectsyn11',connect_syn_12='$connectsyn12'
   WHERE connect='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:manageconnect.php");
    }
    else{
        die("ERROR EDITTING CONNECT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='manageconnect.php'> <em> GO TO CONNECT</em> </a>";
    }

    mysql_close($conn);
?>
