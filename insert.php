
 <?php
 include ('confing.php');
 ?>
 
<?php
//عند الضغط على الزر يحدث الاتي
if(isset($_POST['upload'])){
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $DESC = $_POST['description'];
    $PRICE = $_POST['price'];
    $CATEGORY = $_POST['category'];
    
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_up = "img/" . $image_name;

    // تحقق من وجود المجلد
    if (!file_exists('img')) {
        mkdir('img', 0777, true);
    }
     //ادخال البيانات الى القاعدة بستخدام لغة الاستعلام
    $insert = "INSERT INTO product (id, name, description, price, category, image) 
               VALUES ('$ID', '$NAME', '$DESC', '$PRICE', '$CATEGORY', '$image_up')";
       //التأكد من صحة ادخال البيانات و اشعار المستخدم بالاخطاء
    if(mysqli_query($conn, $insert)){
        if(move_uploaded_file($image_tmp, $image_up)){
            echo "<script>alert('تمت إضافة اللعبة بنجاح');</script>";
        }else{
            echo "<script>alert('IMAGE UPLOAD FAILED: " . $_FILES['image']['error'] . "');</script>";
        }
    }else{
        echo "<script>alert('DATABASE ERROR: " . mysqli_error($conn) . "');</script>";
    }
    echo "<script>window.location.href = 'admin.php';</script>";
    exit();
}
?>
    <a href="index.php">home</a>
