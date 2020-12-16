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
<img src="IMAGENS/peito1.jpg" alt="some text" width=500 height=500 align="left"></td>
  <td><div style="font-size: xx-large">Crucifixo reto com halteres
    </div>  </br>
  <div class="header"width=500 height=500>
O primeiro exercício será o clássico crucifixo reto. Usaremos ele, pois, já estaremos no próprio aquecimento, caso seja feito com halteres e, principalmente porque ele é uma forma de pré-exaustão da musculatura alvo. Isso quer dizer basicamente que, quando trabalhamos peitoral, trabalhamos sinergicamente outros grupamentos musculares tais quais os deltoides, tríceps e até mesmo os glúteos, de maneira auxiliar. Obviamente, de mais ativo nisso temos os deltoides frontais e os tríceps, que costumam entrar em exaustão antes do peitoral, fazendo com que você pare o exercício antes de atingir o seu alvo..</td>
   </div>
  </div>
</table>

        <table>

<td><div style="font-family:courier,arial,helvetica;">
<img src="IMAGENS/peito2.jpg" alt="some text" width=500 height=500 align="left"></td>
  <td><div style="font-size: xx-large">Supino inclinado com halteres
    </div>  </br>
  <div class="header"width=500 height=500>
As dicas para o supino inclinado são as mesmas que para o supino reto, entretanto, neste caso, o banco estará angulado em 45º e, isso naturalmente forçará mais os ombros, logo, você deve ter uma atenção redobrada para possíveis desequilíbrios, aberturas excessivas dos ombros na fase excêntrica do movimento e também para movimentos muito explosivos, a fim de evitar lesões, especialmente na articulação glenoumeral, entre outras estruturas dos ombros, como o próprio manguito rotador.

Seguido desse exercício, utilizaremos o clássico crucifixo inclinado, porém, não faremos em banco 45º, pois, isso além de limitar o movimento na fase excêntrica, ainda pode ocasionar mais facilmente lesões, especialmente em indivíduos iniciantes. Para tanto, usaremos o banco em 30º (mais deitado) possibilitando uma melhor execução do movimento, uma melhor fase excêntrica e uma maior solicitação das fibras musculares.


</td>
   </div>
  </div>
</table>

        <table>

<td><div style="font-family:courier,arial,helvetica;">
<img src="IMAGENS/peito3.jpg" alt="some text" width=500 height=500 align="left"></td>
  <td><div style="font-size: xx-large">Barras paralelas
    </div>  </br>
  <div class="header"width=500 height=500>
Para finalizar o treino, vamos trabalhar o peitoral menor em um exercício o qual diferencia homens de meninos, as barras paralelas.

Para que você solicite o peitoral, o importante é inclinar o corpo para frente, do contrário, você recrutará mais os tríceps. É importante ainda, aduzir as escápulas a fim de estabilizar o movimento e não causar sobrecargas desnecessárias nos deltoides frontais..</td>
   </div>
  </div>
</table>
</div>

</body>
</html>