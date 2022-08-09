<?php
    function registerUser($email){
        echo $email.' is already  registered..!';
    }
    registerUser('biswasamit2648@gmail.com');

    $fruitsName=['first','second','third'];
    $fruits = ['appple', 'orange', 'pear'];

    $fullName=array_combine($fruitsName,$fruits);
    print_r($fullName);

    echo $fullName['first'];

    //var_dump(in_array('apple',$fruits));
?>