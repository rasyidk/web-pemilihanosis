<?php
 $username="root";
 $hostname="localhost";
 $passwd  ="";
 $dbname  ="db_web";
 
 
 $mysqli = new mysqli($hostname, $username, $passwd, $dbname);
 
 if($mysqli->connect_errno){
     //jika login gagal
     echo "login gagal";
     echo $mysqli->connect_error;
     die("Stop Here...");
 }



$emailAddress = false;
if(isset($_POST['inputNIS'])){
    $emailAddress = $_POST['inputNIS'];
}
 
$sql = "SELECT nama from tb_pemilu where nis='".$emailAddress."'";
$hasil = $mysqli->query($sql);
$record = $hasil->fetch_assoc();
if ($record) {
    echo 'Selamat Datang ' . $record['nama'];
} else {
    echo NULL;
}

?>