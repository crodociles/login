<?php
    session_start();
    include_once './dbcon.php';

    if(isset($_POST['user']) && isset($_POST['email']) && isset($_POST['pass1']) && isset($_POST['pass2'])){
        function validate($string){
            $string = trim($string);
            $string = stripslashes($string);
            $string = htmlspecialchars($string);
            return $string;
        }

        $user  = validate($_POST['user']);
        $email = validate($_POST['email']);
        $pass1 = validate($_POST['pass1']);
        $pass2 = validate($_POST['pass2']);

        if(empty($user)){
            header('Location:newaccount.php?error=Username is required');
            exit();
        } else if(empty($email)){
            header('Location:newaccount.php?error=Email is required');
            exit();
        } else if(empty($pass1)){
            header('Location:newaccount.php?error=Password is required');
            exit();
        } else if(empty($pass2)){
            header('Location:newaccount.php?error=Password is required');
            exit();
        }else{
            if($pass1 === $pass2){
                if(str_contains($email,'@') && str_contains($email,'.')){
                    if(strlen($pass1)>8){

                        $sql = "INSERT INTO user (username, email, password) VALUES ('$user', '$email', '$pass1')";

                        if ($conn->query($sql) === TRUE) {
                            $_SESSION['name'] = $user;
                            $_SESSION['email'] = $email;
                            $_SESSION['id'] = $id;
                            header('Location:home.php');
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }else{
                        header('Location:newaccount.php?error=Password must be at least 8 characters long.');
                    }
                }else{
                    header('Location:newaccount.php?error=Email must be a real address.');
                }

            }else{
                header('Location: newaccount.php?error=Passwords do not match');
                exit();
            }
        }

    }else{
        print_r($_POST);
        echo $_POST['user'];
        echo $_POST['email'];
        echo $_POST['pass1'];
        echo $_POST['pass2'];
        // header('Location:newaccount.php?error=All fields must be completed');
        // exit();
    }

?>