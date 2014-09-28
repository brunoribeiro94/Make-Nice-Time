<?php

require '../libs/NiceDate.php';

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$query = mysqli_query($mysqli, "SELECT * FROM menu");
$result = mysqli_fetch_array($query);


foreach ($result as $value) {
    $dat = makeNiceTime::MakeNew($value['data']);
    echo $value['data'] . "<br>" . $dat . "<hr>";
}
