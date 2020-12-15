
<?php
function print_info($query)
{
    $link = mysqli_connect("localhost", "root", "", "cafe")
    or die("Ошибка " . mysqli_error($link));

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        $rows = mysqli_num_rows($result);
        echo "<table border='1'><tr><td>Наименование</td><td>Цена</td></tr>";
        for ($i = 0; $i < $rows ; ++$i) {
            $row = mysqli_fetch_row($result);
            echo "<tr>";
            for ($j = 0; $j < 2; ++$j) echo "<td>$row[$j]</td>";
            echo "</tr>";
        }
        echo "</table>";

        // очищаем результат
        mysqli_free_result($result);
    }
}

		?>

