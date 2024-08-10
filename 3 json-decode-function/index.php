<?php
$json_string = 'json/my.json';
$jsonData = file_get_contents($json_string);
$arr = json_decode($jsonData,true);
echo'<table border="1" cellpadding="10px" cellspacing="0px" width="50%">';
foreach($arr as list("id" => $id, "title" => $title, "body" => $body )){
    echo "<tr><td>{$id}</td><td>{$title}</td><td>{$body}</td></tr>";
}
echo'</table>';
?>