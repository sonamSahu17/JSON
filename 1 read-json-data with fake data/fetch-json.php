<?php
include 'database/config.php';

$sql = "SELECT * from students";
$result = mysqli_query($conn,$sql) or die('failed query');
$output = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($output, JSON_PRETTY_PRINT);

?>