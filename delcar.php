<!--الحذف من عربة التسوق-->
<?php
include ('confing.php');
 $iD= $_GET['id'];
 mysqli_query($conn,"DELETE FROM car WHERE id=$iD ");
 header ('location: car.php ')
?>