<?php 

try{


$baglanti = new PDO('mysql:host=localhost;dbname=sss', "root", "root");
$baglanti->exec('SET CHARACTER SET utf8');

}
catch(PDOException $e){

echo "Baglanamadi hata : ".$e;
}



?>