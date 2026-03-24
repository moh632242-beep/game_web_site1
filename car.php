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
           <nav><a href="index.php">التسوق</a></nav>
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
          <a href="delcar.php?id='.$row['id'].'" class="btn btn-danger">DELETE</a>
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