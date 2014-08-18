<?php

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="jacobpractical"; // Database name
    $tbl_name="earth"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
    $Earth=$_POST["txtEarth"];
    $earthsyn1=$_POST["txtearthsyn1"];
    $earthsyn2=$_POST["txtearthsyn2"];
    $earthsyn3=$_POST["txtearthsyn3"];
    $earthsyn4=$_POST["txtearthsyn4"];
    $earthsyn5=$_POST["txtearthsyn5"];
    $earthsyn6=$_POST["txtearthsyn6"];
    $earthsyn7=$_POST["txtearthsyn7"];
    $earthsyn8=$_POST["txtearthsyn8"];
    $earthsyn9=$_POST["txtearthsyn9"];

    $sql="INSERT INTO $tbl_name(Earth,earth_syn_1,earth_syn_2,earth_syn_3,earth_syn_4,earth_syn_5,earth_syn_6,earth_syn_7,earth_syn_8,earth_syn_9)
            VALUES('$Earth','$earthsyn1','$earthsyn2','$earthsyn3','$earthsyn4','$earthsyn5','$earthsyn6','$earthsyn7','$earthsyn8','$earthsyn9')";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:manageearth.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='manageearth.php'> <em> VIEW EARTH </em> </a>";
    }

    mysql_close($conn);

?>
