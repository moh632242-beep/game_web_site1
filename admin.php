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
            <a href="login.php">الحساب</a>
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

                        <label>صورة اللعبة</label><br>
                        <input type="file" name="image" accept="image/*" required><br>
                        <button type="submit" name="upload" class="btn btn-success">اضافة المنتج</button>
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
                        <a href="update.php?id='.$row['id'].'" class="btn btn-primary">تعديل</a>
                        <a href="delete.php?id=' . $row['id'] . '"  class="btn btn-danger">حذف</a>
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