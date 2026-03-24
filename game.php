<?php
include('confing.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <div class="game-h">
    <nav class="game-l">
    <a href="index.php">تسوق</a>
    </nav>
</div>

<script>
    $(document).ready(function(){
       $(".hide-btn").click(function(){
       $('#des').hide();
    
       });
    });
    $(document).ready(function(){
        $('.show-btn').click(function(){
            $('#des').show();
        });
    });
</script>

    <?php
     $ID = $_GET['id'];
     $result = mysqli_query($conn, "SELECT * FROM product WHERE id='$ID'");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                 
    echo'

    <main class="game-b">
        
        <div class="game-img">
           <center>   <img src="' . $row['image'] . '" class="card-img-top" alt="' . $row['name'] . '" style="height: 480px; width: 360px; object-fit: cover;"></center>
           </div> 
           <div class="game-t">
                <center><h4>'.$row['name'].'</h4>
                <p class="card-text"><strong>$' . $row['price'] . '</strong></p>
                <p  class="card-text"> '.$row['category'].'</p>
                   <button type="button" class="show-btn">إظهار الوصف</button>
                <button type="button" class="hide-btn">اخفاء الوصف</button> 
                <div class="desc-game"> 
               <p class="card-text" id="des">' . $row['description'] . '</p><br><br>
               </div>   
               <a href="val.php?id='.$row['id'].'" class="btn btn-success">أضف للعربة</a> 
               </center>           
                </div> 
        </div>
    </main>
';
                }}
   ?> 
</body>
</html>