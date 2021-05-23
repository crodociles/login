<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg-style.css">
    <title>Document</title>
</head>
<body>
    <form id="reg-form" action="register.php" method="post">
        <h1>Register new account</h1>
        <?php
            if(isset($_GET['error'])){
        ?>
            <p id="error"><?php echo $_GET['error']?></p>
        <?php
            }
        ?>
        <label for="user">User Name</label>
        <input type="text" name="user" id="user" class="text-input">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="text-input">

        <label for="pass1">Password</label>
        <input type="password" name="pass1" id="pass1" class="text-input">

        <label for="pass2">Reenter Password</label>
        <input type="password" name="pass2" id="pass2" class="text-input">

        <input type="submit" value="Register" id="submit-btn">
    </form>
</body>
</html>