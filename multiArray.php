<?php
    $first_array=array(
        array(1,2,3,4),
        array(5,6,7,8),
        array(9,10,11,12),
    );
    $second_array=array(
        array(13,14,15,16),
        array(5,6,7,17),
        array(3,18,12,19),
    );
    $third_array=array();
    
    echo "First Array<br>";
    foreach($first_array as $arr )
    {
        foreach($arr as $value)
        {
           echo $value."  ";
        }
        echo "<br>";
    }
    echo "<br>Second Array<br>";
    foreach($second_array as $arr )
    {
        foreach($arr as $value)
        {
           echo $value."  ";
        }
        echo "<br>";
    }
    echo "<br>Different Elemnets in arrays <br>";
    foreach($first_array as $arr )
    {
        foreach($arr as $value)
        {
            $found=false;
            foreach($second_array as $arr2)
            {
                
                foreach($arr2 as $value2)
                {
                    if($value == $value2)
                    {
                        $found=true;
                    }
                }
            }
            if(!$found)
            {
                array_push($third_array,$value);   
            }
        }
    }
    foreach($second_array as  $arr )
    {
        foreach($arr as $value)
        {
            $found=false;
            foreach($first_array as $arr2)
            {
                foreach($arr2 as $value2)
                {
                    if($value == $value2)
                    {
                        $found=true;
                    }
                }
            }
            if(!$found)
            {
                array_push($third_array,$value);   
            }
        }
    }
?>
<head>
    <style>
        table tr td
        {
            border-width:2px;
            border-style:sold;

        }
    </style>
</head>
<body>
    <table>
        <?php
            foreach($third_array as $val)
             echo "<tr><td style='border-width:2px;border-style:sold'>".$val."</td></tr>";
        ?>
    </table>
</body>