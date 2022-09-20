<?php

include_once "conn.php";

$codigo = $_POST['id'];
$name = $_POST['name'];
$senha = $_POST['Senha'];
$email = $_POST['Email'];
$birth = $_POST['Birth'];
$class = $_POST['Sala'];
$ident = $_POST['iden']; 


$sqlUpdate = "UPDATE users SET  user_name = '$name', user_password = '$senha', user_email = '$email',
 user_birth = '$birth', sala_user = '$class', ident = '$ident' WHERE user_id = '$codigo'";

if (!mysqli_query($conn, $sqlUpdate)) {
    die('Erro ao Atualizar o registro' .mysqli_error($conn));
}else {
    echo "Registro atualizado com sucesso. <br>";
}

mysqli_close($conn);
?>