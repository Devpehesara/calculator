<?php
    $num_1=$_POST['Num01'];
    $num_2=$_POST['Num02'];
    $result='';

    if(isset($_POST["Addition"])){
        $result=$num_1+$num_2;}
    if(isset($_POST["Subtract"])){
        $result=$num_1-$num_2;}
    if(isset($_POST["Multiply"])){
        $result=$num_1*$num_2;}
    if(isset($_POST["Devide"])){
        $result=$num_1/$num_2;}

       echo $result; 
     
    ?>