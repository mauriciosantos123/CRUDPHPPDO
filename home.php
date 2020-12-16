<?php 
  require_once 'CLASSES/usuarios.php';

 $u = new Usuario();




session_start();
 if($_SESSION['id'] != true){
        header('Location: index.php');
 die();
}

?>



<!DOCTYPE html>
<html lang="br">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="CSS/styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">

        <ul>
          <?php echo '<h2>Bem vindo '.$_SESSION['id'].'.</h2>';  ?>
            <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="ombro.php"><i class="fas fa-user"></i>Ombros</a></li>
            <li><a href="peito.php"><i class="fas fa-user"></i>Peito</a></li>
            <li><a href="costa.php"><i class="fas fa-user"></i>Costas</a></li>
            <li><a href="braco.php"><i class="fas fa-user"></i>Braços</a></li>
            <li><a href="perna.php"><i class="fas fa-user"></i>Pernas</a></li>
            <li><a href="panturrilha.php"><i class="fas fa-user"></i>Panturrilha</a></li>
        </ul> 
        <div class="social_media">

          <h2><a href="logout.php">Sair</a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">Dados .</div> 



        <table  border="2" width="100%" font-size= "16pt">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>peso</th>
        <th>ação</th>
    </tr>

<?php

try {
       $u->conectar("projeto","localhost","root","admin"); //conectando ao banco
      if($u->msgErro=="") // caso a mensagem esteja vazia, login ok
      {
    $stmt = $pdo->prepare("SELECT * FROM usuario");
 
        if ($stmt->execute()) {
            while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                echo "<tr>";
                echo "<td>".$rs->nome."</td>
                <td>".$rs->email."</td>
                <td>".$rs->peso."kg</td>
                <td><center><button class=\"btn-primary\"><a href=\"update.php?act=upd&id=" . $rs->id . "\">Alterar</a></button>"
                           ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                           ."<button class=\"btn-danger\"><a onclick =\"return confirm('Tem certeza que deseja excluir esse cadastro ??')\"     href=\"delete.php?act=del&id=" . $rs->id . "\">Excluir</a></center></td></button>";



                echo "</tr>";
            }
        } else {
            echo "Erro: Não foi possível recuperar os dados do banco de dados";
        }
}} catch (PDOException $erro) {
    echo "Erro: ".$erro->getMessage();
}
?>


</table>



</br></br></br>
       <div class="social_media" >

       <a href="cadastrar.php">   <button class="btn-att">Criar Novo</button></a>
      </div>
    </div>
</div>

</body>
</html>