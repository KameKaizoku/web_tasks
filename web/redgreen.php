<style>
    td{
        padding: 10px;
    }
</style>
<table border="1">
    <?php
    $matrix_size = 100;
    echo "<tr><td bgcolor='red' colspan='$matrix_size'></td></tr>";
    for ($i = 1; $i < $matrix_size; $i++) {
        $temp = $matrix_size - $i;
       # $value = $i + 1;
        echo "<tr><td bgcolor='#adff2f' rowspan=$temp></td><td bgcolor='red' colspan=$temp></td></tr>";
    }
    ?>
</table>