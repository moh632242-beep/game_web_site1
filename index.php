<!DOCTYPE html>
<?php
include("confing.php");
session_start();
?>
<html>

<head>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MG STORE</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="s-body">
  <header class="header1">
    <div class="img">
      <h1 class="h4">
        <img src="img/logo.png" alt="logo" width="40" height="40"> MG STORE
      </h1>
    </div>
    <div class="col-md-3">
      <form action="search.php" method="GET">
        <div class="searchbox input-group">
       <input type="search" name="q" class="form-control" placeholder="Search">
          <button type="submit"  class="btn btn-primary">بحث</button>
        </div>
      </form>
    </div>
    <div class="col-md-3 text-end">
      <nav class="home-links">
        <a href="car.php">عربتي</a>
        <a href="login.php">الحساب</a>
      </nav>
    </div>
  </header>
  <!--الصورة الترحيبية-->
  <center>
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/COD WWII.jpg" class="" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>حفل جوائز لعبة السنة</h5>
            <p> (EXPIDTION 33) انتهاء الحفل بفوز </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/re9.jpg" class="" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>RESIDENT EVIL 9</h5>
            <p>اللعبة المنتظرة و عودة ليون قادمة في 26 فبراير</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/silent.jpg" class="" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>MG STORE</h5>
            <p>افضل الالعاب بين يديك الان اشتري و عش في عوالم مختلفةمن الخيال و المتعة</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </center>
  <main class="main container mt-4">
    <h2 class="mb-4">الالعاب</h2>
    <div class="row">

      <?php
      $result = mysqli_query($conn, "SELECT * FROM product");
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {

          echo '
                <div class="col-md-3 mb-4">
                    <div  id="s-card"class="card h-100">
                         <a href="game.php?id=' . $row['id'] . '">
                        <img src="' . $row['image'] . '" class="card-img-top" alt="' . $row['name'] . '" style="height: 400px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <h5 class="mt-1 card-title">' . $row['name'] . '</h5>
                            <p class="card-text"><strong>$' . $row['price'] . '</strong></p>
                            <p  class="card-text"> ' . $row['category'] . '</p>
                             <a href="val.php?id=' . $row['id'] . '" class="btn btn-success">أف للعربة</a>
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
  <a href="test.php">TEST</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>