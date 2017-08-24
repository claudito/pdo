<?php 

class Conexion
{

function __construct()
{

}


function get_conexion()
{
try 
{
	
$pdo  = new PDO("mysql:host=localhost;dbname=colegio","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
return $pdo;
//$pdo = ($pdo) ? "conectado" : "no conectado" ;
//echo $pdo;


} 
catch (Exception $e) 
{
	echo "Error PDO:".$e->getMessage();
}




}





}







 ?>