<?php 

$name = $_GET['name'];


$conn = mysqli_init();
mysqli_real_connect($conn, 'ing63070174.mysql.database.azure.com', 'yahogoo00@ing63070174', 'Ing63070174', 'ITF-Lab_EXAM', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, "UPDATE FROM ITF_EXAM WHERE price='$name'");
$res = mysqli_query($conn, "UPDATE FROM ITF_EXAM WHERE discount='$name'");

if ($res){
    echo"<script>alert('Record is edited.'); window.location = 'show.php'</script>;";
    
}
else{
    echo"<script>alert('Can't edit'); window.location = 'show.php';</script>;";
}
?>