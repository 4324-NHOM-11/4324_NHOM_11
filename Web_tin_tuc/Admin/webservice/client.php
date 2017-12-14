<?php
//Dữ liệu trả về dạng json
$jsonData = file_get_contents("http://localhost:8080/web_tin_tuc/Admin/webservice/web.php?format=json");
$jsonArray = json_decode($jsonData, true);
var_dump($jsonArray);
?>
