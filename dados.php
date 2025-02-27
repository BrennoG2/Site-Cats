<?php
$link = $_POST['catphotourl']
$data = date('d/m/y);
$hora = date('H:i:s');


$server = 'localhost';
$user = 'root';
$password = '';
$dados = 'catss'

$conn = new mysqli($server, $user, $password, $dados);

if($conn->connect_error){
  die("deu ruim".$conn->connect_error);
}

$smtp = $conn->prepare("INSERT INTO cats (link, data, hora) VALUES (?,?,?)");
$smtp->bind_param("sss",$link, $data, $hora)

if($smtp->execute()){
  echo "Foi"
}else{
  echo "deu ruim".$smtp->error;
}

$smpt->close();
$conn->close();
?>
