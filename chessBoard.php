<html>
    <head>
        <title>Chess Board</title>
        <style>
            table tr td
            {
                border-width:2px;
                border-color:black;
                border-style:solid
            }
            .white
            {
                background-color:white;
            }
            .black
            {
                background-color:black;
            }
            td
            {
                width:100px;
                height:75px;
            }
        </style>
    </head>
    <body>
        <table>
            <?php
                for($i=0;$i<8;$i++)
                {
                    echo "<tr>";
                    for($j=0;$j<8;$j++)
                    {
                        $sum=$i+$j;
                        if($sum % 2==0)
                            echo "<td class='white'></td>";
                        else 
                            echo "<td class='black'></td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>