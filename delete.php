<!--حذف اللعبة من المتجر-->
<?php
include ('confing.php');
 $iD= $_GET['id'];
 mysqli_query($conn,"DELETE FROM product WHERE id=$iD ");
 header ('location: admin.php ')
?>

