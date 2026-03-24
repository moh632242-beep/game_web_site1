<?php 
include('confing.php');

$search = $_GET['q'];
$sql="SELECT *FROM product WHERE name LIKE '$search%'";
$result= mysqli_query($conn,$sql);





if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        
        header("location:game.php?id=".$row['id']."");
    }

} else {
    echo "<script>alert('لا توجد نتائج')</script>";
     header("location:index.php");
}
?>