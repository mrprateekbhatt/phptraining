<?php
    $students=array(
        array("name"=>"Ekansh","gender"=>"M"),
        array("name"=>"Prateek","gender"=>"M"),
        array("name"=>"Kunal","gender"=>"M"),
        array("name"=>"Yash","gender"=>"M"),
        array("name"=>"Ankit","gender"=>"M"),
        array("name"=>"Mahak","gender"=>"F"),
        array("name"=>"Ankita","gender"=>"F"),
        array("name"=>"Kanishka","gender"=>"F"),
        array("name"=>"Sagar","gender"=>"M"),
        array("name"=>"Hemant","gender"=>"M"),
    );
    $final_arrangment=$boys=$girls=array();
    echo "<br><br><h1>Initial Seat Arrangment</h1><br><br>";
    foreach($students as $std)
    {
        echo $std["name"]."  |  ";
        if($std["gender"] == "M")
        {   
            array_push( $boys, $std );
        }
        else if($std["gender"] == "F")
        {
            array_push( $girls, $std );
        }
    }
    for($i = 0,$j=0,$k=0; $i < 10; $i++,$j++,$k++)
    {

        if($k < 7)
        {
            array_push($final_arrangment,$boys[$k]);
        }
        if($j < 3)
        {
            array_push( $final_arrangment, $girls[$j] );
        }
    }   
    echo "<br><br><h1>Final Seat Arrangment</h1><br><br>";
    foreach($final_arrangment as $std)
    {
        echo $std["name"]."  |  ";
    }
?>