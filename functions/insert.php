<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

$link = mysqli_connect("localhost", "root", "", "cafe")
or die("Ошибка " . mysqli_error($link));

$query = "INSERT INTO `menu`(`name`, `price`, `category`, `image`) VALUES ('$_POST[name]', '$_POST[price]', $_POST[category], '$_POST[image]')";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
echo $query;

?>