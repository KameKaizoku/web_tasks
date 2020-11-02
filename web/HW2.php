<style>
    td{
        padding: 10px;
    }
</style>
<table border="1">
    <?php
    $size=100;
        for($i=0; $i<$size; $i++)
        {?>
            <tr>
                <?php

                for($j=0;$j<$size; $j++ )
                {

                    $col='black';
                    if($j-$i<0 && $j<$size-$i-1) $col = 'yellow';
                    if($j-$i<0 && $j>$size-$i-1) $col = 'brown';
                    if($j-$i>0 && $j<$size-$i-1) $col = 'blue';
                    if($j-$i>0 && $j>$size-$i-1) $col = 'orange';
                    if ($j==$i) $col='red';
                    if ($j==$size-$i-1) $col='green';

                    echo "<td bgcolor=$col></td>";
                }?>
            </tr>
        <?php } ?>
</table>