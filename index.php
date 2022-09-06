<?php
include_once("conn.php");
//nclude_once("insert.php");
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

        <center><H1>LimaSchool<H1></center>
        <hr>
    </header>

    <form name="dados_User" method="post" action="insert.php">
    <center>
    <h3>Name</h3>
    <input name="name" type="text"><br>
    <br>

    <h3>Password</h3>
    <input name="Senha" type="password"><br>
    <br>
    
    <h3>Email</h3>
    <input name="Email" type="text"><br>
    <br>

    <h3>Birthday</h3>
    <input name="Birth" type="date"><br>
    <br>

    <h3>class(number)</h3>
    <input name="Sala" type="number"><br>
    <br>

    You are: <select name="iden">
        <option value="Professor">Teacher</option>
        <option value="Aluno">student</option>
    </select>
    <br>

    <input type="submit" value="Send" action="submit">
    <input type="Reset" value="Clean">    

    </center>
    <br>
    <br>
    </form>

    
</body>
</html>