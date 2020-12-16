<?php 
  require_once 'CLASSES/usuarios.php';
 $u = new Usuario();

session_start();
if(!isset($_SESSION['id']))
{
  header("index.php");
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
        <div class="header">Dados  .</div> 

        <table>

<td><div style="font-family:courier,arial,helvetica;">
<img src="IMAGENS/perna1.jpg" alt="some text" width=500 height=500 align="left"></td>
  <td><div style="font-size: xx-large">Avanço
    </div>  </br>
  <div class="header"width=500 height=500>
Este exercício promove forte atuação dos músculos do quadríceps e tem como antagonistas, os músculos isquiotibiais. Este exercício pode ser feito em qualquer parte do treino.</td>
   </div>
  </div>
</table>

        <table>

<td><div style="font-family:courier,arial,helvetica;">
<img src="IMAGENS/perna2.png" alt="some text" width=500 height=500 align="left"></td>
  <td><div style="font-size: xx-large"> Agachamento
    </div>  </br>
  <div class="header"width=500 height=500>
O melhor exercício para qualquer treino de pernas. Se você não tem agachamento em seu treino para perna, certamente engrossá-la será uma tarefa muito mais difícil. Também atua nos músculos dos isquiotibiais e glúteos.

</td>
   </div>
  </div>
</table>

        
</div>

</body>
</html>