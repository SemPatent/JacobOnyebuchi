<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 6/6/14
 * Time: 7:40 PM
 */
$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="jacobpracticalfrench"; // Database name
$tbl_name="request"; // Table name

header('Content-Type: text/plain;charset=utf-8');

// Find the pinyin
$pos1 = strpos($line, '[');
$pos2 = strpos($line, ']');
$pinyin = substr($line, $pos1+1, $pos2-$pos1-1);
//print("$pinyin\n");


//capture search term and remove spaces at its both ends if there is any
$searchTerm = trim($_POST["keyname"]);

//check whether the name parsed is empty
if($searchTerm == "")
{
    echo "Enter name you are searching for.";
    exit();
}

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

$data = mysql_query("SELECT Abat,abat_syn_1,abat_syn_2,abat_syn_3,abat_syn_4,abat_syn_5,abat_syn_6,abat_syn_7,abat_syn_8,abat_syn_9,abat_syn_10,abat_syn_11,abat_syn_12,abat_syn_13 FROM abat WHERE Abat LIKE '%$searchTerm%'");
if (!$data) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
print("$pinyin\n");
$row = mysql_fetch_row($data);
echo "<tr>";
echo $row[0] . " </td>\n";
echo $row[1] . " </td>\n";
echo $row[2] . " </td>\n";
echo $row[3] . " </td>\n";
echo $row[4] . " </td>\n";
echo $row[5] . " </td>\n";
echo $row[6] . " </td>\n";
echo $row[7] . " </td>\n";
echo $row[8] . " </td>\n";
echo $row[9] . " </td></td>";
echo $row[10] . " </td>\n";
echo $row[11] . " </td>\n";
echo $row[12] . " </td>\n";
echo $row[13] . " </td></td>";


$data_1 = mysql_query("SELECT Ballottine,ballottine_syn_1,ballottine_syn_2 FROM ballottine WHERE Ballottine LIKE '%$searchTerm%'");
if (!$data_1) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
print("$pinyin\n");
$row_1 = mysql_fetch_row($data_1);
echo "<tr>";
echo $row_1[0] . " </td>\n";
echo $row_1[1] . " </td>\n";
echo $row_1[2] . " </td>\n";

$data_2 = mysql_query("SELECT Capitalization,capitalization_syn_1,capitalization_syn_2,capitalization_syn_3 FROM capitalization WHERE Capitalization LIKE '%$searchTerm%'");
if (!$data_2) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
print("$pinyin\n");
$row_2 = mysql_fetch_row($data_2);
echo "<tr>";
echo $row_2[0] . " </td>\n";
echo $row_2[1] . " </td>\n";
echo $row_2[2] . " </td>\n";
echo $row_2[3] . " </td>\n";

?>