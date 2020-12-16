<?php
require 'conexao.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM usuario WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['nome'])  && isset($_POST['email']) ) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
   $peso = $_POST['peso'];
  $sql = 'UPDATE usuario SET nome=:name, email=:email, peso=:peso WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $nome,':peso' => $peso, ':email' => $email, ':id' => $id])) {
    header("Location: home.php");
  }



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
        <div class="header">Dados do cliente .</div> 


<div class="container">
  <div class="card mt-5">
    <div class="card-header">
    </br></br></br>
      <h2>ATUALIZAR DADOS</h2>
      </br></br>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <table>
      <form method="post">
        <div class="social_media">
          <label for="nome">Name</label>
          <input value="<?= $person->nome; ?>" type="text" name="nome" id="nome" class="form-control">
        </div></br></br>
        <div class="social_media">
          <label for="email">Email</label>
          <input type="email" value="<?= $person->email; ?>" name="email" id="email" class="form-control">
        </div></br></br>
        <div class="social_media">
          <label for="email">Peso</label>
          <input  value="<?= $person->peso; ?>" name="peso" id="peso" class="form-control">
        </div></br></br>
        <div class="form-group">
          <button type="submit" class="btn-att">ATUALIZAR </button>
        </div>
        </table>
      </form>
    </div>
  </div>
</div>
      </div>
    </div>
</div>

</body>
</html>