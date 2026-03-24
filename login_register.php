<?php
include('confing.php');
//تسجيل حساب جديد
session_start();
session_regenerate_id(true);

if (isset($_POST['register'])){
    $NAME = $_POST['name'];
    $EMAIL = $_POST['email'];
    $PASSWORD = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $ROLE= $_POST['role'];
    //فحص البريد اذا كان موجود او لا لكي تتم اضافته لقاعدة البيانات
     $checkEmail = $conn->query("SELECT email FROM user WHERE email='$EMAIL'");
    if($checkEmail->num_rows > 0){
      $_SESSION['register_error']=  "Email already registed!)";
      $_SESSION['active_form']='registed';
    }else{
      $conn->query("INSERT INTO user (name , email , password , role) VALUE ('$NAME','$EMAIL','$PASSWORD','$ROLE') ");
    }
    header("location: login.php");
    exit();
   }

   //تسجيل الدخول
   if(isset($_POST['a-login'])){
      $EMAIL= $_POST['email'];
      $PASSWORD = $_POST['password'];

      $result = mysqli_query($conn ,"SELECT *FROM user WHERE email='$EMAIL'");
      
       if($result->num_rows > 0){
        $user = $result->fetch_assoc();
      if(password_verify($PASSWORD , $user['password'])){
         $_SESSION['name']= $user['name'];
         $_SESSION['email']= $user['email'];

         if($user['role'] === 'admin'){
            header("location: admin.php");
         }else{
            header("location: index.php");
         }
         exit();
     }
   }
   $_SESSION['login_error'] = 'incorrect Email or Password';
   $_SESSION['active_form'] = 'login';
   header("location: login.php");
   
   }



   
?>