<?php
/**
 * Created by PhpStorm.
 * User: brock_2424
 * Date: 1/24/17
 * Time: 11:18 PM
 */

$dbname = 'store';
$dbuser = 'brock';
$dbpass = 'root';
$dbhost = '192.168.1.24';
$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysql_select_db($dbname) or die("Could not open the db '$dbname'");
$test_query = "SHOW TABLES FROM $dbname";
$result = mysql_query($test_query);
$tblCnt = 0;
while($tbl = mysql_fetch_array($result)) {
    $tblCnt++;
    #echo $tbl[0]."<br />\n";
}
if (!$tblCnt) {
    echo "There are no tables<br />\n";
} else {
    echo "There are $tblCnt tables<br />\n";
}
var_dump($dbhost);