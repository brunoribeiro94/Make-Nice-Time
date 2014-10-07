<?php
// include files required
require '../libs/NiceDate.php';
require 'config.inc.php';

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$query = mysqli_query($mysqli, "SELECT * FROM menu");

// list result(s)
while($result = $mysqli_fetch_array($query)) {
    $dat = makeNiceTime::MakeNew($value['data']);
    echo $value['data'] . "<br>" . $dat . "<hr>";
}
