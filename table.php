<body>
    <table>
    <?php
            $n=10;$m=15;$i=$j=0;
            for($i=1;$i<$n;$i++)
            {
                echo "<tr>";
                for($j=1;$j<$m;$j++)
                {
                    $k= (int)$i*(int)$j;
                    echo "<td style='border-width:2px;border-style:solid'>".$i."*".$j."=".$k."</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>

