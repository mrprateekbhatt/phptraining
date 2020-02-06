<?php
    $sentence = "MY name IS PRATEEK and i am an INNORAFTIAN";       //Sample String.
    $result = "";
    $sentence_array = explode(" ", $sentence);                      //
    foreach($sentence_array as $word)
    {
        if( $word == "PRATEEK" )
        {
            continue;
        }
        if( preg_match('/^[A-Z]+$/', $word) )
        {
            $result = $result . " " . $word;
        }
    }
    echo "<br><br><h1>Initial Sentence</h1><br><br>";
    echo $sentence;
    echo "<br><br><h1>Final Result</h1><br><br>";
    echo $result;
?>