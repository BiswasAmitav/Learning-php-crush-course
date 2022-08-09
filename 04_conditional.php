<?php

    $age =17;

    if($age>=18){
        echo 'You are old enough to solve vote.';
    }else {
        echo 'Sorry, you are not old enough to vote';
    }


    $t = date("H");
    echo $t;

    if($t<12){
        echo 'Good morning. ';
    }else{
        echo 'God evening . ';
    }
?>