<?php
    include('./dbconfig.php');

    $query1 = "SELECT * FROM mytest WHERE delta='8'";
    $row1 = mysqli_fetch_array($mysqli->query($query1));
    //print_r($row1);
    //echo $row1['beta'];


    $query1 = "SELECT * FROM mytest WHERE delta='4'";
    $row1 = mysqli_fetch_assoc($mysqli->query($query1));
    print_r($row1);
    echo $row1['beta'];


?>