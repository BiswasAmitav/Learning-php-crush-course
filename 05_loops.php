<?php
    for($x=0;$x<=10;$x++){
        echo 'Numer '. $x . '<br>';
    }

    echo '<br>';

    $posts=['First post', 'Second post', 'Third post'];


    $person =[
        'first_name' => 'dipto',
        'last_name' => 'Choudhury',
        'age' => 23   
    ];

    for($x=0;$x<count($posts);$x++){
        echo $posts[$x];
        echo '<br>';
    }


    echo '<br>';

    foreach ($posts as $index => $post) {
        echo $index+1 . '-'. $post . '<br>';
    }


    echo "<br>";
    echo "<br>";
    echo "<br>";

    foreach($person as $key => $value){
        echo "$key - $value <br> ";
    }
?>