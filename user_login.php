<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="CSS/user_login.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <?php
        ob_start();
        include 'header.php';
        $nav = ob_get_clean();
        $nav = str_replace('Login',' ', $nav);
        echo $nav;
    ?>
    <p class="login_text">Login</p>
    <section class="container">
        
        <form method="POST">
            
            <label for="index">Index Number</label><br>
            <input id="index" name="index"><br>

            <label for="password">Password</label><br>
            <input id="password" name="password" ><br>

            <button class="login_button">Submit</button>
        </form>
    </section>
</body>
</html>