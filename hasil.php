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
//if ($record) {
  //  echo 'Selamat Datang ' . $record['ketua_satu'];
//} else {
 //   echo NULL;
//}
//echo $record;


 
$sql1 = "SELECT SUM(ketua_satu) from tb_pemilu";
$hasil1 = $mysqli->query($sql1);
$record1 = $hasil1->fetch_assoc();
$ketua1 = implode(" ",$record1);


$sql2 = "SELECT SUM(ketua_dua) from tb_pemilu";
$hasil2 = $mysqli->query($sql2);
$record2 = $hasil2->fetch_assoc();
$ketua2 = implode(" ",$record2);

$sql3 = "SELECT SUM(ketua_tiga) from tb_pemilu";
$hasil3 = $mysqli->query($sql3);
$record3 = $hasil3->fetch_assoc();
$ketua3 = implode(" ",$record3);

$sql4 = "SELECT SUM(ketua_empat) from tb_pemilu";
$hasil4 = $mysqli->query($sql4);
$record4 = $hasil4->fetch_assoc();
$ketua4 = implode(" ",$record4);

$sql5 = "SELECT SUM(ketua_lima) from tb_pemilu";
$hasil5 = $mysqli->query($sql5);
$record5 = $hasil5->fetch_assoc();
$ketua5 = implode(" ",$record5);

$sql6 = "SELECT SUM(ketua_enam) from tb_pemilu";
$hasil6 = $mysqli->query($sql6);
$record6 = $hasil6->fetch_assoc();
$ketua6 = implode(" ",$record6);

//SEKRETARIS

$sql7 = "SELECT SUM(sekretaris_satu) from tb_pemilu";
$hasil7 = $mysqli->query($sql7);
$record7 = $hasil7->fetch_assoc();
$sekretaris7 = implode(" ",$record7);

$sql8 = "SELECT SUM(sekretaris_dua) from tb_pemilu";
$hasil8 = $mysqli->query($sql8);
$record8 = $hasil8->fetch_assoc();
$sekretaris8 = implode(" ",$record8);

$sql9 = "SELECT SUM(sekretaris_tiga) from tb_pemilu";
$hasil9 = $mysqli->query($sql9);
$record9 = $hasil9->fetch_assoc();
$sekretaris9 = implode(" ",$record9);

$sql10 = "SELECT SUM(sekretaris_empat) from tb_pemilu";
$hasil10 = $mysqli->query($sql10);
$record10 = $hasil10->fetch_assoc();
$sekretaris10 = implode(" ",$record10);

$sql11 = "SELECT SUM(sekretaris_lima) from tb_pemilu";
$hasil11 = $mysqli->query($sql11);
$record11 = $hasil11->fetch_assoc();
$sekretaris11 = implode(" ",$record11);

$sql12 = "SELECT SUM(sekretaris_enam) from tb_pemilu";
$hasil12 = $mysqli->query($sql12);
$record12 = $hasil12->fetch_assoc();
$sekretaris12 = implode(" ",$record12);

//BENDAHRA
$sql13 = "SELECT SUM(bendahara_satu) from tb_pemilu";
$hasil13 = $mysqli->query($sql13);
$record13 = $hasil13->fetch_assoc();
$bendahara13 = implode(" ",$record13);

$sql14 = "SELECT SUM(bendahara_dua) from tb_pemilu";
$hasil14 = $mysqli->query($sql14);
$record14 = $hasil14->fetch_assoc();
$bendahara14 = implode(" ",$record14);

$sql15 = "SELECT SUM(bendahara_tiga) from tb_pemilu";
$hasil15 = $mysqli->query($sql15);
$record15 = $hasil15->fetch_assoc();
$bendahara15 = implode(" ",$record15);

$sql16 = "SELECT SUM(bendahara_empat) from tb_pemilu";
$hasil16 = $mysqli->query($sql16);
$record16 = $hasil16->fetch_assoc();
$bendahara16 = implode(" ",$record16);

$sql17 = "SELECT SUM(bendahara_lima) from tb_pemilu";
$hasil17 = $mysqli->query($sql17);
$record17 = $hasil17->fetch_assoc();
$bendahara17 = implode(" ",$record17);

$sql18 = "SELECT SUM(bendahara_enam) from tb_pemilu";
$hasil18 = $mysqli->query($sql18);
$record18 = $hasil18->fetch_assoc();
$bendahara18 = implode(" ",$record18);


$object = (object) [
    'ketua1' => $ketua1,
    'ketua2' => $ketua2,
    'ketua3' => $ketua3,
    'ketua4' => $ketua4,
    'ketua5' => $ketua5,
    'ketua6' => $ketua6,
    'sekretaris7' => $sekretaris7,
    'sekretaris8' => $sekretaris8,
    'sekretaris9' => $sekretaris9,
    'sekretaris10' => $sekretaris10,
    'sekretaris11' => $sekretaris11,
    'sekretaris12' => $sekretaris12,
    'bendahara13' => $bendahara13,
    'bendahara14' => $bendahara14,
    'bendahara15' => $bendahara15,
    'bendahara16' => $bendahara16,
    'bendahara17' => $bendahara17,
    'bendahara18' => $bendahara18
];

echo json_encode($object);

?>