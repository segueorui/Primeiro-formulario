<?php
	
$pula = "<br />";
$nome = $_POST["nome"];
$email = $_POST["email"];
$estadoCivil =  $_POST["estado_civil"];
@$conjuge = $_POST["conjuge"];
if(!$conjuge) $conjuge = "null";

echo "$nome $pula $email $pula $estadoCivil $pula $conjuge $pula";
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO cadastro (nome, email, estadoCivil, nomeConjuge)
VALUES ('$nome', '$email', '$estadoCivil', '$conjuge');";



if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>