<?php
header('Content-Type: text/html; charset=utf-8');
$servername = "108.167.189.106";
$username = "santikon_pop";
$password = "0927381976";
$connection = mysqli_connect($servername, $username, $password, 'santikon_Porfolio');
print_r($connection);
    if(!$connection){
        die("Connection Failed").mysqli_error($connection);
    }

    $query = "select * from Work";

    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query FAILED'.mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
    }
?>