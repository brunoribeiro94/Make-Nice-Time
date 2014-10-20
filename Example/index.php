<?php
// include files required
require '../libs/NiceDate.php';

require 'config.inc.php';

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$query = mysqli_query($mysqli, "SELECT * FROM menu");

// list result(s)
while($result = mysqli_fetch_assoc($query)) {
    $dat = makeNiceTime::MakeNew($result['data']);
    echo "Timestamp : ".$result['data']." <br> Formatted : $dat <hr>";
}
