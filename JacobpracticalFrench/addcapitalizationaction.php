<?php

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="jacobpracticalfrench"; // Database name
    $tbl_name="capitalization"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
$Capitalization=$_POST["txtCapitalization"];
$capitalizationsyn1=$_POST["txtcapitalizationsyn1"];
$capitalizationsyn2=$_POST["txtcapitalizationsyn2"];
$capitalizationsyn3=$_POST["txtcapitalizationsyn3"];

$sql="INSERT INTO $tbl_name(Capitalization,capitalization_syn_1,capitalization_syn_2,capitalization_syn_3)
            VALUES('$Capitalization','$capitalizationsyn1','$capitalizationsyn2','$capitalizationsyn3'
            )";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:managecapitalization.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managecapitalization.php'> <em> VIEW CAPITALIZATION </em> </a>";
    }

    mysql_close($conn);

?>
