<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link type="text/css" href="CSS/index.css" rel="stylesheet">
    <title>CRITAC</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
       include 'header.php' 
    ?>
    <section class="flex_container">
        <div class="div_sub_one">
            <span class="div_sub_one_text">Project Submission <br>Portal<br>
            <a class="register_button" href="register.php">Register</a>
            </span>
        </div>

        <div class="div_sub_two">
            <img  src="images/vector.png">
        </div>
    </section>
    <?php
        include 'footer.php';
    ?>
</body>
</html>