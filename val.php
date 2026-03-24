<?php
include("confing.php");
$ID = $_GET['id'];
$UP = mysqli_query($conn, "SELECT *FROM product WHERE id='$ID'");
$data = mysqli_fetch_array($UP)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accept Buy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <center>
        <div class="main3">
            <form action="ins2car.php" method="post">
                <h3>هل انت متأكد من طلب الشراء؟</h3>
                <input type="id" name="id" value="<?php echo $data['id'] ?>">
                   <input type="text" name="name" value=" <?php echo $data['name'] ?>"><br>
                    <input type="text" name="price" value=" $<?php echo $data['price'] ?>"><br>
                <div class="but-accept">
                    <button type="submit" name="accept" class="btn btn-primary">متأكد</button><br>
                    <a href="index.php">العودة للتسوق</a>
                </div>
            </form>
        </div>
    </center>
</body>

</html>