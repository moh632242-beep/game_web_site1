<?php
include('confing.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body class="b-login"><center>
    <h1><img src="img/logo.png" alt=""> MG STORE مرحبا في</h1>
        <main id="login">
            <h2>تسجيل دخول</h2><br>
            <form action="login_register.php" method="POST">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="a-login" class="btn btn-primary">تسجيل دخول</button>
            <p>ليس لدسك حساب؟ <a href="singin.php">انشاء حساب</a></p>
            </form>
        </main>
    </center>
</body>

</html>