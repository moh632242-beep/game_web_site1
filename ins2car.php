<!--اضافة منتج الى عربة التسوق-->
<?php
include("confing.php");

if(isset($_POST['accept'])){
    $ID= $_POST['id'];
    $NAME =$_POST['name'];
    $PRICE= $_POST['price'];
$insert =mysqli_query($conn , " INSERT INTO car (id , name , price )VALUES ('$ID','$NAME','$PRICE')");
}
header("location: car.php");
?>
