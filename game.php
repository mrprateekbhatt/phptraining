<?php
    if(array_key_exists('button1', $_POST)) { 
        result("stone"); 
    } 
    else if(array_key_exists('button2', $_POST)) { 
        result("paper"); 
    } 
    else if(array_key_exists('button3', $_POST)) { 
        result("sceizer"); 
    }
    function result($player) 
    { 
        $num=rand(1,3);
        if($num==1)
        {
            $computer="stone";
        }
        else if($num==2)
        {
            $computer="paper";
        }
        else if($num==3)
        {
            $computer="sceizer";
        }
        if($computer==$player)
        {
            echo "Same choices play again.";
        }
        else if($computer=="stone" && $player=="paper")
        {
            echo "Computer chooses: Stone  -> You Win";
        }
        else if($computer=="paper" && $player=="sceizer")
        {
            echo "Computer chooses: paper  -> You Win";
        }
        else if($computer=="sceizer" && $player=="stone")
        {
            echo "Computer chooses: sceizer  -> You Win";
        }
        else if($computer=="stone" && $player=="sceizer")
        {
            echo "Computer choose: Stone -> Computer Win";
        }
        else if($computer=="paper" && $player=="stone")
        {
            echo "Computer choose: paper  -> Computer Win";
        }
        else if($computer=="sceizer" && $player=="paper")
        {
            echo "Computer choose: sceizer  -> Computer Win";
        }
        else 
        {
            echo "no condition matched".$computer.$player;
        }
    } 
?>
<!DOCTYPE html> 
<html> 
    <body style="text-align:center;"> 
        <form method="post" action=""> 
            <input type="submit" name="button1"
                    class="button" value="Stone" /> 
            
            <input type="submit" name="button2"
                    class="button" value="paper" /> 

            <input type="submit" name="button3"
            class="button" value="sceizer" /> 
        </form> 
    </body> 

</html> 