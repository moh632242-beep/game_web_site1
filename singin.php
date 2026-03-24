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

<body class="b-login">
  <center>
    <h1><img src="img/logo.png" alt="">Welcom in MG STORE</h1>
    <main id="login">
      <h2>انشاء حساب</h2><br>
      <form action="login_register.php" method="POST">
       <input type="text" name="name" placeholder="الاسم" required><br>
       <input type="email" name="email" placeholder="Email" required><br>
       <input type="password" name="password" placeholder="Password" required><br>
       <select name="role" required>
        <option value="">--اختار الدور</option>
        <option value="user">مستخدم</option>
        <option value="admin">مسؤول</option>
       </select>
       <button type="submit" name="register" class="btn btn-primary">انشاء حساب</button>
       <p>لديك حساب لالفعل؟<a href="login.php">تسجيل دخول</a></p>
      </form>
    </main>
  </center>
</body>

</html>