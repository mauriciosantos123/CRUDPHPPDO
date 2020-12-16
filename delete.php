<?php
require 'conexao.php';
$id = $_GET['id'];
$sql = 'DELETE FROM usuario WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: home.php");
}