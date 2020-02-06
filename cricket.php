<?php
    $matches=array(
        "match_A" => array(
            "team_1"=>array("player101" => 100, "player102" => 185, "player103" => 292, "player104"=> 54, "player105" => 101),
            "team_2"=>array("player201" => 10, "player202" => 15, "player203" => 62, "player204"=> 14, "player205" => 61)
        ),
        "match_B"=>array(
            "team_1"=>array("player101" => 90, "player102" => 15, "player103" => 12, "player104"=> 84, "player105" => 19),
            "team_3"=>array("player301" => 50, "player302" => 15, "player303" => 62, "player304"=> 64, "player305" => 21)
        ),
        "match_C"=>array(
            "team_1"=>array("player101" => 20, "player102" => 15, "player103" => 72, "player104"=> 44, "player105" => 91),
            "team_4"=>array("player401" => 0, "player402" => 2, "player403" => 2, "player404"=> 3, "player405" => 31)
        ),
        "match_D"=>array(
            "team_2"=>array("player201" => 47, "player202" => 66, "player203" => 62, "player204"=> 24, "player205" => 88),
            "team_3"=>array("player301" => 53, "player302" => 5, "player303" => 22, "player304"=> 4, "player305" => 6)
        ),
        "match_E"=>array(
            "team_2"=>array("player201" => 33, "player202" => 5, "player203" => 0, "player204"=> 4, "player205" => 1),
            "team_4"=>array("player401" => 10, "player402" => 15, "player403" => 22, "player404"=> 14, "player405" => 64)
        ),
        "match_F"=>array(
            "team_3"=>array("player301" => 20, "player302" => 48, "player303" => 43, "player304"=> 44, "player305" => 71),
            "team_4"=>array("player401" => 10, "player402" => 5, "player403" => 8, "player404"=> 74, "player405" => 1)
        )
    );

    $team_1=0;$team_2=0;$team_3=0;$team_4=0;

    foreach($matches as $match => $team_name)
    {
        $i=$score_2=$score_1=0;
        foreach($team_name as $team=>$players)
        {
            if($i==0)
            {
                $match_team_1= $team;
                $score_1=array_sum($players);
                $i++;
            }
            else if($i == 1)
            {
                $match_team_2=$team;
                $score_2=array_sum($players);
            }
        }
        if($score_1 > $score_2)
        {
            if($match_team_1 =="team_1")
            {
                $team_1++;
            }
            else if($match_team_1=="team_2")
            {
                $team_2++;
            }
            else if($match_team_1=="team_3")
            {
                $team_3++;
            }
            else if($match_team_1=="team_4")
            {
                $team_4++;
            }
        }
        else if($score_1 < $score_2)
        {
            if($match_team_2 =="team_1")
            {
                $team_1++;
            }
            else if($match_team_2=="team_2")
            {
                $team_2++;
            }
            else if($match_team_2=="team_3")
            {
                $team_3++;
            }
            else if($match_team_2=="team_4")
            {
                $team_4++;
            }
        }
    }

    if($team_1 > $team_2 && $team_1 > $team_3 && $team_1 > $team_4)
    {
        echo "<h1>Team_1 is Tournament winner team.</h1>";
    }
    else if($team_2 > $team_1 && $team_2 > $team_3 && $team_2 > $team_4)
    {
        echo "<h1>Team_2 is Tournament winner team.</h1>";
    }
    else if($team_3 > $team_1 && $team_3 > $team_2 && $team_3 > $team_4)
    {
        echo "<h1>Team_3 is Tournament winner team.</h1>";
    }
    else if($team_4 > $team_1 && $team_4 > $team_3 && $team_4 > $team_2)
    {
        echo "<h1>Team_4 is Tournament winner team.</h1>";
    }
    echo $team_4.$team_3.$team_2.$team_1;






    $max=0;
    foreach($matches as $match => $teams_array)
    {
        $sum=0;
        foreach($teams_array as $players_score)
        {
            $sum = $sum + array_sum($players_score);
        }
        if($sum > $max)
        {
            $max = $sum;
            $high_match=$match;
        }
    }


    echo "<h1>Highest Score of match is ".$max." in ".$high_match."</h1>";


?>