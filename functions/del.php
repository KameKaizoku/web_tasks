<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

$link = mysqli_connect("localhost", "root", "", "cafe")
or die("Ошибка " . mysqli_error($link));

$query = "DELETE FROM `menu` WHERE `name` = '$_POST[name]'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
echo $query;

?>