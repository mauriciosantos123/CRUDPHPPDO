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
<img src="IMAGENS/ombro1.jpg" alt="some text" width=500 height=500 align="left"></td>
  <td><div style="font-size: xx-large">Elevação Lateral com Halter
    </div>  </br>
  <div class="header"width=500 height=500>
A elevação lateral possui uma série de benefícios para a musculatura.  Esse exercício tem como objetivos a definição dos músculos, fortalecimento dos músculos, estabilização articulações e desenvolvimento de deltoides. Pode ser realizado de pé, sentado, uni ou bilateralmente. Não eleve os halteres acima da linha do ombro, principalmente se você estiver com algum sinal de lesão como por exemplo a temida lesão Slap.</td>
   </div>
  </div>
</table>

        <table>

<td><div style="font-family:courier,arial,helvetica;">
<img src="IMAGENS/ombro2.jpg" alt="some text" width=500 height=500 align="left"></td>
  <td><div style="font-size: xx-large">Levantamento Frontal com Halter
    </div>  </br>
  <div class="header"width=500 height=500>
Esse exercício trabalha deltoide anterior, deltoide lateral, trapézio e peitoral superior. A pegada mais fechada dará maior ênfase para deltoide anterior, enquanto uma pegada mais aberta enfatizará o deltoide lateral. O exercício pode ser executado sentado ou em pé, mas se você quiser ter mais controle opte por faze-lo em pé.
</td>
   </div>
  </div>
</table>

        <table>

<td><div style="font-family:courier,arial,helvetica;">
<img src="IMAGENS/ombro3.jpg" alt="some text" width=500 height=500 align="left"></td>
  <td><div style="font-size: xx-large">Remada Alta com Barra
    </div>  </br>
  <div class="header"width=500 height=500>
Trabalha com maior enfoque a musculatura do ombro mas também trabalha alguns músculos das costas como o trapézio que ajudam na sustentação e equilibrio muscular na região. Para maximizar o treino de deltoides, a pegada deve ter mantida um pouco mais aberta e sempre tenha muita atenção na postura com abdômen contraído durante o exercício.</td>
   </div>
  </div>
</table>
</div>

</body>
</html>