<?php

    $id = $_GET['id'];

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="jacobpractical"; // Database name
    $tbl_name="about"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
$About=$_POST["txtAbout"];
$aboutsyn1=$_POST["txtaboutsyn1"];
$aboutsyn2=$_POST["txtaboutsyn2"];
$aboutsyn3=$_POST["txtaboutsyn3"];
$aboutsyn4=$_POST["txtaboutsyn4"];
$aboutsyn5=$_POST["txtaboutsyn5"];
$aboutsyn6=$_POST["txtaboutsyn6"];
$aboutsyn7=$_POST["txtaboutsyn7"];
$aboutsyn8=$_POST["txtaboutsyn8"];
$aboutsyn9=$_POST["txtaboutsyn9"];


    $sql = "UPDATE $tbl_name SET About = '$About', about_syn_1='$aboutsyn1', about_syn_2='$aboutsyn2', about_syn_3='$aboutsyn3', about_syn_4='$aboutsyn4', about_syn_5='$aboutsyn5'
     , about_syn_6='$aboutsyn6', about_syn_7='$aboutsyn7', about_syn_8='$aboutsyn8', about_syn_9='$aboutsyn9' WHERE about='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:manageabout.php");
    }
    else{
        die("ERROR EDITTING ABOUT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='manageabout.php'> <em> GO TO ABOUT </em> </a>";
    }

    mysql_close($conn);
?>
