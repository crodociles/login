<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log In</title>
</head>
<body>
    <form action="login.php" method="POST" id="login-container">
        <h1>Log In</h1>
        <?php
            if(isset($_GET['error_message'])){
        ?>
            <p id="error"><?php echo $_GET['error_message']?></p>
        <?php
            }
        ?>
        <label for="username">User Name</label>
        <input type="text" name="username" id="username" class="text-input"/>
        
        <label for="username">Password</label>
        <input type="password" name="password" id="password" class="text-input"/>

        <input type="submit" value="Log In" id="submit-btn">
    </form>
</body>
</html>