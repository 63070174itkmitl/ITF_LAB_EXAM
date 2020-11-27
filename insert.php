<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ing63070174.mysql.database.azure.com', 'yahogoo00@ing63070174', 'Ing63070174', 'ITF-Lab_EXAM', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$product = $_POST['product'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$total = $price * ($discount/100);



$sql = "INSERT INTO ITF_EXAM (product, price, discount, total) VALUES ('$product', '$price', '$discount', '$total')";


if (mysqli_query($conn, $sql)) {
    echo"<script>alert('Record Added. Going back to Form page'); window.location = 'index.html';</script>";
  }
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>