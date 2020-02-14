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



$ketua = false;
$sekretaris = false;
$bendahara = false;
$nis_siswa = false;

if(isset($_POST['ketua'])){
    $ketua = $_POST['ketua'];
}
if(isset($_POST['sekretaris'])){
    $sekretaris = $_POST['sekretaris'];
}
if(isset($_POST['bendahara'])){
    $bendahara = $_POST['bendahara'];
}
if(isset($_POST['nis_siswa'])){
    $nis_siswa = $_POST['nis_siswa'];
}

$table1 = false;
$table2 = false;
$table3 = false;

if ($ketua == 1){
    $table1 = 'ketua_satu';
}
if ($ketua == 2){
    $table1 = 'ketua_dua';
}
if ($ketua == 3){
    $table1 = 'ketua_tiga';
}
if ($ketua == 4){
    $table1 = 'ketua_empat';
}
if ($ketua == 5){
    $table1 = 'ketua_lima';
}
if ($ketua == 6){
    $table1 = 'ketua_enam';
}


if ($sekretaris == 1){
    $table2 = 'sekretaris_satu';
}
if ($sekretaris == 2){
    $table2 = 'sekretaris_dua';
}
if ($sekretaris == 3){
    $table2 = 'sekretaris_tiga';
}
if ($sekretaris == 4){
    $table2 = 'sekretaris_empat';
}
if ($sekretaris == 5){
    $table2 = 'sekretaris_lima';
}
if ($sekretaris == 6){
    $table2 = 'sekretaris_enam';
}

if ($bendahara == 1){
    $table3 = 'bendahara_satu';
}
if ($bendahara == 2){
    $table3 = 'bendahara_dua';
}
if ($bendahara == 3){
    $table3 = 'bendahara_tiga';
}
if ($bendahara == 4){
    $table3 = 'bendahara_empat';
}
if ($bendahara == 5){
    $table3 = 'bendahara_lima';
}
if ($bendahara == 6){
    $table3 = 'bendahara_enam';
}

echo $nis_siswa;

$sql = "UPDATE tb_pemilu SET $table1=1,$table2=1,$table3=1 WHERE nis=$nis_siswa";
$mysqli->query($sql);

//$sql = "INSERT INTO tb_photo($table1,$table2,$table3)values(19929,4889,30000)";
//$mysqli->query($sql);


/*if($ketua == 1){
    $sql = "INSERT INTO tb_photo(ketua_satu)values(100)";
    $mysqli->query($sql);

}

if($sekretaris == 1){
    $sql = "INSERT INTO tb_photo(sekretaris_satu)values(100)";
    $mysqli->query($sql);
}

if($bendahara == 1){
    $sql = "INSERT INTO tb_photo(bendahara_satu)values(100)";
    $mysqli->query($sql);
}
*/

?>