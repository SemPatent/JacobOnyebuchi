<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 5/24/14
 * Time: 6:06 PM
 */
//session_start();
//if(!isset($_SESSION['username'])){
//header("location:welcome.php");
//}
?>

<?php

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

$sql="SELECT Dedicate,dedicate_syn_1,dedicate_syn_2,dedicate_syn_3,dedicate_syn_4 FROM $tbl_name ";

$result=mysql_query($sql);

if(!$result){
    die("ERROR CHECKING USERNAME:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html lang="en" xml:lang="en">
<head>
    <title>MANAGE DEDICATE</title>
    <meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="files/styles.css?v=59969665">
    <script type="text/javascript" src="files/validateInput.js?v=7788"></script>

</head>

<body>


<div id="head">
    <header>
        <h2 > MANAGE DEDICATE</h2>
        <ul class="list" style="margin-top: 50px; ">
            <li style=" font-size: 14px;"><a style="color: #3366FF" href="home.php"><b>HOME</b></a></li>
            <li style=" font-size: 14px;"><a style="color: #3366FF" href="adddedicate.php"><b>ADD DEDICATE</b></a></li>
            <li style="float: right; font-size: 14px; "><a style="color: #3366FF" href="logout.php"><b><i>LOGOUT</i></b></a></li>
        </ul>
    </header>
</div>

<center>
    <table cellpadding='2' cellspacing='5px' border='5px' style= 'margin-top: 3.8em'>
        <tr><td bgcolor="blue" style='width: 900px'>
                <table cellpadding='0' cellspacing='5px' border='5px' width='100%'>
                    <tr>
                        <td bgcolor="blue" align=center style="padding:5px;padding-bottom:7px">
                            <font size=-1 color="white" face="verdana,arial">
                                <b><h3> DEDICATE </h3></b>
                            </font>
                    </tr>
                    <tr><td bgcolor=#eee style="padding:8px"><br>
                            <table >
                                <tr >
                                    <?php
                                    echo "\t<tr>\n";
                                    echo "\t\t<td style='padding:4px'><b><h3>Dedicate </h3></b></td>";
                                    echo "\t\t<td style='padding:4px'><b><h3>dedicate syn 1</h3></b></td>";
                                    echo "\t\t<td style='padding:4px'><b><h3>dedicate syn 2</h3></b></td>";
                                    echo "\t\t<td style='padding:4px'><b><h3>dedicate syn 3</h3></b></td>";
                                    echo "\t\t<td style='padding:4px'><b><h3>dedicate syn 4</h3></b></td>";
                                    echo "\t</tr>\n";
                                    // Printing results in HTML
                                    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
                                        $id = $line['Dedicate'];
                                        echo "\t<tr>\n";
                                        foreach ($line as $col_value) {
                                            echo "\t\t<td style='padding:4px'>$col_value</td>";
                                        }
                                        echo "\t\t<td style='padding:4px'><a href='editdedicate.php?id=$id'>Edit Record $id </a></td>\n";
                                        echo "\t</tr>\n";
                                    }
                                    // Free resultset
                                    mysql_free_result($result);
                                    mysql_close();
                                    ?>
                                </tr>
                                <tr>
                                    <td colspan=2>&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</center>

<ul id="foot" >
    <li ><a href="contactus.html">Contact Us</a></li> -
    <li><a href="faq.html">FAQ</a></li> -
    <li><a href="terms.html">Terms and Conditions</a></li>
</ul>
</body>
</html>
