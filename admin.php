<!--جلسة -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--اتصال بقاعدة البيانات-->
    <?php
    include('confing.php');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>control panal</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>

<body>
    <!--الشريط العلوي-->
    <header class="header2">
        <h2>لوحة التحكم</h2>
        <nave class="links-admin">
            <a href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg></a>
<a href="adAll.php">ALL</a>
<a href="ad.php">AD</a>
        </nave>
    </header>
    <center>
        <main class="main2">
            <section class="admin-section">
                <center>
                    <!--ادخال البيانات و إرسالها الى صفحة ادخال البيانات لقاعدة البيانات الخاصة يالمنتجات-->
                    <form action="insert.php" method="post" enctype="multipart/form-data">
                        <h3>اضافة منتج</h3>
                        <label>id</label><br>
                        <input type="text" name="id" placeholder="id" required><br>

                        <label>اسم اللعبة</label><br>
                        <input type="text" name="name" placeholder="game name" required><br>

                        <label>وصف اللعبة</label><br>
                        <textarea name="description" placeholder="description" required></textarea><br>

                        <label>سعر اللعبة</label><br>
                        <input type="number" name="price" placeholder="game price" step="0.01" required><br>

                        <label>تصنيف اللعبة</label><br>
                        <input type="text" name="category" placeholder="category" required><br>

                        <label>اضافة صورة</label><br>
                        <input type="file" name="image" accept="image/*" required><br>
                        <button type="submit" name="upload" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M6.354 9.854a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 8.707V12.5a.5.5 0 0 1-1 0V8.707z"/>
</svg></button>
                    </form>
                </center>
            </section>
        </main>
    </center>
    <br>

<!--جعل النتجات على هيئة بطاقات تتكون من 4 اعمدة-->
    <main class="main container mt-4">
        <h3 >إدارة النتاجات</h3>
        <!--تضاف المنتجات كمصفوفة-->
        <div class="row">
            <?php
            //جلب البيانات من قاعدة البيانات ليتم ادخالها في البطاقات
            $result = mysqli_query($conn, "SELECT * FROM product");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo '
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                  <img src="' . $row['image'] . '" class="card-img-top" alt="' . $row['name'] . '" style="height: 400px; object-fit: cover;">
                <div class="card-body">
                     <div class="body-card">  
                       <h5 class="card-title">' . $row['name'] . '</h5>
                        <p class="card-text"><strong>$' . $row['price'] . '</strong></p>
                        <p class="card-text"><small class="text-muted">' . $row['category'] . '</small></p>
                        <a href="update.php?id='.$row['id'].'" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-feather" viewBox="0 0 16 16">
  <path d="M15.807.531c-.174-.177-.41-.289-.64-.363a3.8 3.8 0 0 0-.833-.15c-.62-.049-1.394 0-2.252.175C10.365.545 8.264 1.415 6.315 3.1S3.147 6.824 2.557 8.523c-.294.847-.44 1.634-.429 2.268.005.316.05.62.154.88q.025.061.056.122A68 68 0 0 0 .08 15.198a.53.53 0 0 0 .157.72.504.504 0 0 0 .705-.16 68 68 0 0 1 2.158-3.26c.285.141.616.195.958.182.513-.02 1.098-.188 1.723-.49 1.25-.605 2.744-1.787 4.303-3.642l1.518-1.55a.53.53 0 0 0 0-.739l-.729-.744 1.311.209a.5.5 0 0 0 .443-.15l.663-.684c.663-.68 1.292-1.325 1.763-1.892.314-.378.585-.752.754-1.107.163-.345.278-.773.112-1.188a.5.5 0 0 0-.112-.172M3.733 11.62C5.385 9.374 7.24 7.215 9.309 5.394l1.21 1.234-1.171 1.196-.027.03c-1.5 1.789-2.891 2.867-3.977 3.393-.544.263-.99.378-1.324.39a1.3 1.3 0 0 1-.287-.018Zm6.769-7.22c1.31-1.028 2.7-1.914 4.172-2.6a7 7 0 0 1-.4.523c-.442.533-1.028 1.134-1.681 1.804l-.51.524zm3.346-3.357C9.594 3.147 6.045 6.8 3.149 10.678c.007-.464.121-1.086.37-1.806.533-1.535 1.65-3.415 3.455-4.976 1.807-1.561 3.746-2.36 5.31-2.68a8 8 0 0 1 1.564-.173"/>
</svg></a>
                        <a href="delete.php?id=' . $row['id'] . '"  class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
</svg></a>
                    </div>
                </div>
             </div>
         </div>';
                }
            } else {
                echo '<div class="col-12"><p class="text-center">No products found.</p></div>';
            }
            ?>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>