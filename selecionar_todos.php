<?php
include_once "conn.php";

//Criando tabela e cabeçalho de dados:

echo "<meta charset='UTF-8'>";
echo "<center><table border=1>";
echo "<tr>";
echo "<th>Codigo</th>";
echo "<th>Nome</th>";
echo "<th>Email</th>";
echo "<th>Birth</th>";
echo "<th>Sala</th>";
echo "<th>Ident</th>";
echo "</tr>";


$sql= "SELECT * FROM users";
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

echo "<center>Registro cadastrado na base de dados.</br></center>";

while ($registro = mysqli_fetch_array($resultado))
 {
$id = $registro['user_id'];
$name = $registro['user_name'];
$email = $registro['user_email'];
$date = $registro['user_birth'];
$sala = $registro['sala_user'];
$ident = $registro['ident'];

echo "<tr>";
echo "<td>".$id."</td>";
echo "<td>".$name."</td>";
echo "<td>".$email."</td>";
echo "<td>".date("d/m/Y", strtotime($date))."</td>";
echo "<td>".$sala."</td>";
echo "<td>".$ident."</td>";
echo "</tr>";
}
mysqli_close($conn);

?>