<?php
    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HOME</h1>
    <p>Welcome <?php echo $_SESSION['username'] ?></p>
    <a href="logout.php">Log out</a>
</body>
</html>

<?php
} else{
    header('Location:index.php');
    exit();
}
?>