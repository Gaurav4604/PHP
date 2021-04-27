<?php
    header("Access-Control-Allow-Origin: *");
    $connection = mysqli_connect('localhost:3307', 'root', '', 'discussion');
    $query = 'select * from recruits';

    $result = mysqli_query($connection, $query);

    if($result){
        $json_arr = array();
        while($row = mysqli_fetch_assoc($result)) {
            array_push($json_arr, $row);
        }
        echo json_encode($json_arr);
    }
?>