
    <?php
    include ('confing.php');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

<?php
include("confing.php");

if(isset($_POST['update'])){
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

    $update = "UPDATE product SET id='$ID' , name='$NAME', description='$DESC'  , price='$PRICE' , image='$image_up' WHERE id='$ID' ";

    if(mysqli_query($conn, $update)){
        if(move_uploaded_file($image_tmp, $image_up)){
            echo "<script>alert('PRODUCT UPDATED SUCCESSFULLY');</script>";
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
  
