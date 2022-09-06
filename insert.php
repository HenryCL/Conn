<?php
include_once "conn.php";

$name = $_POST['name'];
$email = $_POST['Email'];
$password = $_POST['password'];
$birth = $_POST['birth'];
$class = $_POST['class'];
$ident = $_POST['iden'];

echo"Dados Capturados do Forms";
echo "Name: ".$nome."<br>";
echo "Email: ".$email."<br>";
echo "Password: ".$senha."<br>";
echo "Birth: ".$birth."<br>";
echo "Class: ".$class."<br>";
echo "Iden: ".$ident."<br>";


//Comand SQL

$sql = "INSERT INTO users (user_name, user_email, user_password, user_birth, sala_user, ident)
values('$nome' ,'$email' ,'$senha', '$birth', '$class', '$ident')";

if (!mysqli_query($conn,$sql)){
    die("Erro ao inserir as informações do Forms na tabela selecionada(users)". mysqli_error($conn));
}
echo "Informações Cadastradas com Êxito <br>";

echo "<form method='post'>";
echo
"<center>
<button type='submit' formaction='index.php'>Página Inicial</button>
</center>
</form>";
?>