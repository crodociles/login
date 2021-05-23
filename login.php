<?php

session_start();
include_once './dbcon.php';

if(isset($_POST['username']) && isset($_POST['password'])){
    function validate($string){
        $string = trim($string);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        return $string;
    }

    $uname= validate($_POST['username']);
    $pass = validate($_POST['password']);

    if(empty($uname)){
        header('Location:index.php?error_message=Username is required');
        exit();
    } else if(empty($pass)){
        header('Location:index.php?error_message=Password is required');
        exit();
    }else{
        $sql = "SELECT * FROM user WHERE username = '$uname' AND password = '$pass'";
        $result = $conn->query($sql);

        if(mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
            if($uname === $row['username'] && $pass === $row['password']){
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header('Location:home.php');
            }
        }else{
            header('Location:index.php?error_message=Incorrect User Name or Password');
            exit();
        }
    }

}else{
    header('Location:index.php?error_message=Username and password required');
}