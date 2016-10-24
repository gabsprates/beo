<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc; margin: 50PX}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-yw4l{vertical-align:top;}
</style>
<table align="center" class="tg">
  <tr>
    <th class="tg-yw4l">Código ID</th>
    <th class="tg-yw4l">Nome</th>
    <th class="tg-yw4l">CNPJ</th>
    <th class="tg-yw4l">Telefone</th>
    <th class="tg-yw4l">Telefone 2</th>
    <th class="tg-yw4l">Endereço</th>
    <th class="tg-yw4l">Atuação</th>
    <th class="tg-yw4l">Email</th>
  </tr>
<?php

// Incluindo o arquivo de conexao como banco de dados
require("includes/conexao.php");

$sql="SELECT * FROM Empresa";
$result=mysqli_query($link, $sql);

while($row = mysqli_fetch_assoc($result))
{
?>
  <tr>   
	<td class="tg-yw4l"><?php echo "{$row['id']}"; ?></td>
	<td class="tg-yw4l"><?php echo "{$row['nome']}"; ?></td>
    <td class="tg-yw4l"><?php echo "{$row['cnpj']}"; ?></td>
    <td class="tg-yw4l"><?php echo "{$row['telefone']}"; ?></td>
    <td class="tg-yw4l"><?php echo "{$row['telefone2']}"; ?></td>
    <td class="tg-yw4l"><?php echo "{$row['endereco']}"; ?>/td>
    <td class="tg-yw4l"><?php echo "{$row['atuacao']}"; ?></td>
    <td class="tg-yw4l"><?php echo "{$row['email']}"; ?></td>
  </tr>
<?php
}

// Fecha Conexao
mysqli_close($link)or die(mysqli_error($link));

?>
</table>