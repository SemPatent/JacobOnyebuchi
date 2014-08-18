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
$db_name="jacobpractical"; // Database name
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

$data = mysql_query("SELECT About,about_syn_1,about_syn_2,about_syn_3,about_syn_4,about_syn_5,about_syn_6,about_syn_7,about_syn_8,about_syn_9 FROM about WHERE About LIKE '%$searchTerm%'");
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


$data_1 = mysql_query("SELECT Begin,begin_syn_1,begin_syn_2,begin_syn_3,begin_syn_4,begin_syn_5,begin_syn_6,begin_syn_7,begin_syn_8 FROM begin WHERE Begin LIKE '%$searchTerm%'");
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
echo $row_1[3] . " </td>\n";
echo $row_1[4] . " </td>\n";
echo $row_1[5] . " </td>\n";
echo $row_1[6] . " </td>\n";
echo $row_1[7] . " </td>\n";
echo $row_1[8] . " </td>\n";

$data_2 = mysql_query("SELECT Connect,connect_syn_1,connect_syn_2,connect_syn_3,connect_syn_4,connect_syn_5,connect_syn_6,connect_syn_7,connect_syn_8,connect_syn_9,connect_syn_10
,connect_syn_11,connect_syn_12 FROM connect WHERE Connect LIKE '%$searchTerm%'");
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
echo $row_2[4] . " </td>\n";
echo $row_2[5] . " </td>\n";
echo $row_2[6] . " </td>\n";
echo $row_2[7] . " </td>\n";
echo $row_2[8] . " </td>\n";
echo $row_2[9] . " </td>\n";
echo $row_2[10] . " </td>\n";
echo $row_2[11] . " </td>\n";
echo $row_2[12] . " </td>\n";

$data_3 = mysql_query("SELECT Dedicate,dedicate_syn_1,dedicate_syn_2,dedicate_syn_3,dedicate_syn_4 FROM dedicate WHERE Dedicate LIKE '%$searchTerm%'");
if (!$data_3) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
print("$pinyin\n");
$row_3 = mysql_fetch_row($data_3);
echo "<tr>";
echo $row_3[0] . " </td>\n";
echo $row_3[1] . " </td>\n";
echo $row_3[2] . " </td>\n";
echo $row_3[3] . " </td>\n";
echo $row_3[4] . " </td>\n";

$data_4 = mysql_query("SELECT Earth,earth_syn_1,earth_syn_2,earth_syn_3,earth_syn_4,earth_syn_5,earth_syn_6,earth_syn_7,earth_syn_8,earth_syn_9 FROM earth WHERE Earth LIKE '%$searchTerm%'");
if (!$data_4) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
print("$pinyin\n");
$row_4 = mysql_fetch_row($data_4);
echo "<tr>";
echo $row_4[0] . " </td>\n";
echo $row_4[1] . " </td>\n";
echo $row_4[2] . " </td>\n";
echo $row_4[3] . " </td>\n";
echo $row_4[4] . " </td>\n";
echo $row_4[5] . " </td>\n";
echo $row_4[6] . " </td>\n";
echo $row_4[7] . " </td>\n";
echo $row_4[8] . " </td>\n";
echo $row_4[9] . " </td>\n";

$data_5 = mysql_query("SELECT Fantastic,fantastic_syn_1,fantastic_syn_2,fantastic_syn_3,fantastic_syn_4,fantastic_syn_5,fantastic_syn_6
,fantastic_syn_7,fantastic_syn_8,fantastic_syn_9 FROM fantastic WHERE Fantastic LIKE '%$searchTerm%'");
if (!$data_5) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
print("$pinyin\n");
$row_5 = mysql_fetch_row($data_5);
echo "<tr>";
echo $row_5[0] . " </td>\n";
echo $row_5[1] . " </td>\n";
echo $row_5[2] . " </td>\n";
echo $row_5[3] . " </td>\n";
echo $row_5[4] . " </td>\n";
echo $row_5[5] . " </td>\n";
echo $row_5[6] . " </td>\n";
echo $row_5[7] . " </td>\n";
echo $row_5[8] . " </td>\n";
echo $row_5[9] . " </td>\n";

$data_6 = mysql_query("SELECT Grasp,grasp_syn_1,grasp_syn_2,grasp_syn_3,grasp_syn_4,grasp_syn_5,grasp_syn_6,grasp_syn_7,grasp_syn_8,grasp_syn_9,grasp_syn_10 FROM grasp WHERE Grasp LIKE '%$searchTerm%'");
if (!$data_6) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
print("$pinyin\n");
$row_6 = mysql_fetch_row($data_6);
echo "<tr>";
echo $row_6[0] . " </td>\n";
echo $row_6[1] . " </td>\n";
echo $row_6[2] . " </td>\n";
echo $row_6[3] . " </td>\n";
echo $row_6[4] . " </td>\n";
echo $row_6[5] . " </td>\n";
echo $row_6[6] . " </td>\n";
echo $row_6[7] . " </td>\n";
echo $row_6[8] . " </td>\n";
echo $row_6[9] . " </td>\n";
echo $row_6[10] . " </td>\n";

?>