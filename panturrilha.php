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
<img src="IMAGENS/pant1.jpg" alt="some text" width=500 height=500 align="left"></td>
  <td><div style="font-size: xx-large">Panturrilha em pé
    </div>  </br>
  <div class="header"width=500 height=500>
Para que esse exercício apresente melhores resultados, posicione-se em frente a um degrau, uma caixa pesada ou um desses steps de academia. Mantenha as pontas dos pés sobre esse apoio e, levemente, levante todo o corpo fazendo força somente com a ponta dos dedos (foco no dedão!) Mantenha-se nessa posição por três segundos e retorne à posição inicial. Faça dez movimentos até completar três séries com descansos de 20 segundos.

Se a intenção for trabalhar diferentes músculos das panturrilhas, você pode variar o exercício. Por exemplo: com os pés voltados para frente, todo o músculo será exercitado. Se estiverem apontados para fora com os calcanhares unidos, os músculos internos serão fortalecidos. Se voltados para dentro, a parte externa das panturrilhas receberá mais atenção..</td>
   </div>
  </div>
</table>

        <table>

<td><div style="font-family:courier,arial,helvetica;">
<img src="IMAGENS/pant2.png" alt="some text" width=500 height=500 align="left"></td>
  <td><div style="font-size: xx-large"> Posteriores de coxa e panturrilha
    </div>  </br>
  <div class="header"width=500 height=500>
Esse treino é um pouco diferente, mas muito eficaz! Para começar, você vai precisar de um colchonete e um pedaço de pano, que pode ser um lençol ou um cachecol velho. O exercício é simples: deite-se se costas e passe o pano sob um dos pés, mantendo a perna reta. Puxe-a lentamente para cima até sentir os músculos da coxa começarem a doer. Enquanto realiza esse levantamento de perna, inspire o ar pelo nariz. Segure nessa posição por dez minutos e retorne à posição inicial, expirando o ar pela boca. Repita o movimento com a outra perna até completar dez movimentos de cada lado. Descanse por trinta segundos e faça mais duas séries.
</td>
   </div>
  </div>
</table>

        
</div>

</body>
</html>