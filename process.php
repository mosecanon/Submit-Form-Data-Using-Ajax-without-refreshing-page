<?php
$connection = mysqli_connect('localhost', 'root', '', 'your_database_name');

extract($_POST);

$data = '';

foreach($_POST as $k => $v) {
    if(empty($data)) {
        $data .= "$k ='$v'";
    } else {
        $data .= ", $k='$v'";
    }
}

$sql = "INSERT INTO table_name set $data";
$results = mysqli_query($connection, $sql);

if($results) {
    echo "Data Submitted Successfully";
} else {
    echo "Data submission has failed, Please Try Again";
}
