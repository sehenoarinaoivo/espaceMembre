<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "espacemembre";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>


<?php
// try{
//     $base = new PDO("mysql:host=localhost; dbname=espacemembre","root","");
// }
// catch(exception $e){
//     die("Erreur".$e->getMessage());
// }


?>