<?php

session_start();

$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = '';
$DB_NAME = "users";
 
$con = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if ( mysqli_connect_errno() ) {
	exit("Bağlantı hatası.");
}

$id = $_POST['id'];  
$baslik = $_POST['baslik'];  
$aciklama = $_POST['aciklama'];  
$link = $_POST['link'];  

      
$sql = "INSERT INTO duyurular (id, baslik, aciklama, link) VALUES ('$id', '$baslik', '$aciklama', '$link')";
if (mysqli_query($con, $sql)) {
    header("Location: /admin/basarili.php");
} else {
    header("Location: /admin/basarisiz.php");
}
mysqli_close($con);
          
?>  