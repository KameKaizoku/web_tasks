<style>
    td{
        padding: 10px;
    }
</style>
<table border="1">
    <?php
        for($i=0; $i<5; $i++)
        {?>
            <tr>
                <?php for($j=0;$j<5; $j++ )
                {
                    $col='black';
                    if($i>$j && $i<4 && $j<2) $col = 'yellow';
                    if($i>$j && $i>2 && $j>0) $col = 'brown';
                    if($i<$j && $i<2 && $j<4) $col = 'blue';
                    if($i<$j && $i>0 && $j>2) $col = 'orange';
                    if ($j==$i) $col='red';
                    if ($j==4-$i) $col='green';

                    echo "<td bgcolor=$col></td>";
                }?>
            </tr>
        <?php } ?>
</table>