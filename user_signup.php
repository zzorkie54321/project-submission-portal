<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="CSS/user_signup.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <?php
        ob_start();
        include 'header.php';
        $nav = ob_get_clean();
        $nav = str_replace('Login',' ', $nav);
        echo $nav;
    ?>
    <p class="register_text">Register</p>
    <section class="container">
        
        <form method="POST">
            
            <label for="name">Name</label><br>
            <input id="name" name="name" type="text"><br>

            <label for="email">Email</label><br>
            <input id="email" name="email" type="email"><br>

            <label for="course">Course</label><br>
            <input name="Course" type="text"><br>

            <label for="index">Index Number</label><br>
            <input id="index" name="index"><br>

            <label for="password">Password</label><br>
            <input id="password" name="password" ><br>

            <button class="signup_button">Submit</button>
        </form>
    </section>
</body>
</html>