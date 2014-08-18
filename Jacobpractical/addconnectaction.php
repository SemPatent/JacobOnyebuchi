<?php

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
$Connect=$_POST["txtConnect"];
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

$sql="INSERT INTO $tbl_name(Connect,connect_syn_1,connect_syn_2,connect_syn_3,connect_syn_4,connect_syn_5,connect_syn_6,connect_syn_7,connect_syn_8,connect_syn_9,connect_syn_10,connect_syn_11,connect_syn_12)
            VALUES('$Connect','$connectsyn1','$connectsyn2','$connectsyn3','$connectsyn4','$connectsyn5','$connectsyn6','$connectsyn7','$connectsyn8','$connectsyn9','$connectsyn10','$connectsyn11','$connectsyn12'
            )";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:manageconnect.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='manageconnect.php'> <em> VIEW CONNECT </em> </a>";
    }

    mysql_close($conn);

?>
