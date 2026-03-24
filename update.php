<?php
include ('confing.php');
$ID = $_GET['id'];
$UP = mysqli_query($conn , "SELECT *FROM product WHERE id=$ID ");

$data =mysqli_fetch_array($UP);
?>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('confing.php');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>

<body>
    <header class="header2">
        <h2>control panal</h2>
        <nave class="links-admin">
            <a href="index.php">Store</a>
        </nave>
    </header>
    <center>
        <main class="main2">
            <section class="admin-section">
                <center>
                    <form action="up.php" method="post" enctype="multipart/form-data">
                        <h3>update product :</h3>
                        <label>Game id:</label><br>
                        <input type="text" name="id" placeholder="id" required value='<?php echo $data['id'];?>'><br>

                        <label>Game Name:</label><br>
                        <input type="text" name="name" placeholder="game name" required value='<?php echo $data['name'] ?>'><br>

                        <label>Game Description:</label><br>
                        <textarea name="description" placeholder="description" required value='<?php echo $data['description'];?>'></textarea><br>

                        <label>Game Price:</label><br>
                        <input type="number" name="price" placeholder="game price" step="0.01" required value='<?php echo $data['price'];?>'><br>

                        <label>Game Category:</label><br>
                        <input type="text" name="category" placeholder="category" required value='<?php echo $data['category'];?>'><br>

                        <label>Game img:</label><br>
                        <input type="file" name="image" accept="image/*" required><br>
                        <button type="submit" name="update" class="btn btn-success">UPDATE</button>
                    </form>
                </center>
            </section>
        </main>
    </center>