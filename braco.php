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
<img src="IMAGENS/braco1.jpg" alt="some text" width=500 height=500 align="left"></td>
  <td><div style="font-size: xx-large">Rosca direta (supinada)

    </div>  </br>
  <div class="header"width=500 height=500>
egue a barra (pode ser reta ou W) ou o dumbbell com as palmas das mãos viradas para cima (pegada supinada). Em seguida, mantendo os ombros e cotovelos fixos ao lado do corpo, levante apenas os antebraços, como se estivesse usando-os para segurar uma bandeja ou uma caixa. Atente-se sempre à postura para evitar lesões.
</td>
   </div>
  </div>
</table>

        <table>

<td><div style="font-family:courier,arial,helvetica;">
<img src="IMAGENS/braco2.jpg" alt="some text" width=500 height=500 align="left"></td>
  <td><div style="font-size: xx-large"> Rosca Martelo
    </div>  </br>
  <div class="header"width=500 height=500>
Segundo Vanessa, a rosca martelo permite que você use uma carga maior para cada braço do que nas variações de exercícios com barra. Para executá-la, você pode escolher entre ficar de pé ou sentado em um banco.

Segure o halter ou o dumbbell com as palmas das mãos voltadas para dentro e os polegares para cima. Sem mudar a posição das mãos, levante os pesos em direção aos ombros, e retorne lentamente até a posição de início.


</td>
   </div>
  </div>
</table>

        
</div>

</body>
</html>