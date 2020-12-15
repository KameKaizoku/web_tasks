
<?php
function print_info($query)
{
    $link = mysqli_connect("localhost", "root", "", "cafe")
    or die("Ошибка " . mysqli_error($link));

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        $rows = mysqli_num_rows($result);
        echo "<table ><tr><td>Наименование</td><td>Цена</td><td>Изображение</td></tr>";
        for ($i = 0; $i < $rows ; ++$i) {
            $row = mysqli_fetch_row($result);
            echo "<tr>";
            for ($j = 0; $j < 3; ++$j) {
                if($j==2) echo "<td><img src = images/$row[$j] width='120px' height='120px'></td>";
                else echo "<td>$row[$j]</td>"; }
            echo "</tr>";
        }
        echo "</table>";

        // очищаем результат
        mysqli_free_result($result);
    }
}

		?>

