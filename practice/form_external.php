<?php 
    $usr = $_POST["usr"];
    $pswd = $_POST["pswd"];
    if(isset($_POST['smbt'])){
        echo "yes it works" . "<br>";
        echo "Hello " . $usr . ", Your password is " . $pswd . "<br>";
    }

    $connection = mysqli_connect('localhost:3307', 'root', '', 'loginapp');
    if ($connection){
        echo "We are connected" . "<br>";
    }
    else {
        die ("database connection failed");
    }
    $query = 'insert into users(username, password) values ("' . $usr . '", "' . $pswd . '");' ;
    $result = mysqli_query($connection, $query);
    if ($result){
        echo "User created";
    }
    else {
        die("query unsuccessful" . mysqli_error($connection));
    }
?>