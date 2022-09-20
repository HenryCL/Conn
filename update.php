<?php
include_once("conn.php");
// include_once("insert.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LimaSchool</title>
</head>
<body>
 <header>
 <!-- <center> <img class="logotipo" src="Images/escola.png" alt="LimaSchool"> -->

    <form name="dados_User" method="post" action="up.php">
    <center>
    <h3>ID</h3>
    <input name="id" type="text"><br>
    <br>

    <h3>Nome Completo</h3>
    <input name="name" type="text"><br>
    <br>

    <h3>Senha</h3>
    <input name="Senha" type="password"><br>
    <br>
    
    <h3>Email</h3>
    <input name="Email" type="text"><br>
    <br>

    <h3>Aniversário</h3>
    <input name="Birth" type="date"><br>
    <br>

    <h3>Sala</h3>
    <input name="Sala" type="number"><br>
    <br>

    Você é: <select name="iden">
        <option value="Professor">Professor</option>
        <option value="Aluno">Aluno</option>
    </select>
    <br>
    <br>
    <input type="submit" name="enviar" value="Atualizar" action="submit">
    <br>
    <br>
    <input type="Reset" value="Limpar">    
    <br>
    <br>
    <button type='submit' formaction='delete.php'>Deletar</button>
    <br>
    <br>
    <button type='submit' formaction='selecionar_todos.php'>Ver todos os Registros</button>
    <br>
    <br>
    </center>
    <br>
    <br>
    </form>

    
</body>
</html>
