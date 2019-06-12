<?php 

ob_start(); 
include("baglanti.php");

if(!isset($_COOKIE["users"])){
header ("Location:index.php"); 
stop();
}

include("baglanti.php");

$idsi = $_POST["idsi"];
$baglanti->query('delete from records where id = '.$idsi);

?>