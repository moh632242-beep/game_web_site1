<?php 
 $host ="localhost";
 $user="root";
 $password= "";
 $dbname="mg_store";
 $conn = mysqli_connect($host,$user,$password,$dbname);

 if(!$conn){
    die("the resion : ". mysqli_connect_error());
 }
 
?>