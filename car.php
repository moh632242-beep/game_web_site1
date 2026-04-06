<?php
include("confing.php");
session_start();
?>
<!DOCTYPE html>
 <html lang="en">
<head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
      <meta charset="UTF-8">
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   
</head >
<body class="body-car">
     <div id="header-car">
        <center>
           <nav><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
</svg></a></nav>
        </center>
          
      </div>
      <main class="main container mt-4">     
          <center> <h2>عربتي</h2>   </center>   
      <div class="row">     
    <?php
    
    $result = mysqli_query($conn ,"SELECT *FROM car");
    if (mysqli_num_rows($result)>0){
        while($row =mysqli_fetch_array($result)){echo '         
          <br>
          <div class="col-md-3 mb-4">    
          <div class="card" style="width: 18rem;">
          <div  id="cart" class="card-body">
          <h5 class="card-title">'.$row['name'].'</h5>
          <p class="card-text"><strong>'.$row['price'].'</strong></p>
          <a href="delcar.php?id='.$row['id'].'" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-x-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M7.354 5.646 8.5 6.793l1.146-1.147a.5.5 0 0 1 .708.708L9.207 7.5l1.147 1.146a.5.5 0 0 1-.708.708L8.5 8.207 7.354 9.354a.5.5 0 1 1-.708-.708L7.793 7.5 6.646 6.354a.5.5 0 1 1 .708-.708"/>
</svg></a>
          </div>
         </div>
        </div>
        ';
        }
    }else{
        echo '<center>Not foun products</center>';
    }
    ?>
    </div> 
  </main>
 </body>
<?php
 
?>
</html>