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
<img src="IMAGENS/costas1.jpg" alt="some text" width=500 height=500 align="left"></td>
  <td><div style="font-size: xx-large">Barra fixa
    </div>  </br>
  <div class="header"width=500 height=500>
Por não conseguirem fazer um numero alto de repetições, como 10 ou 12. São muitos os marombeiros (principalmente iniciantes) que se sentem um pouco intimidados ou desconfortáveis com esse exercício e acabam por ignorá-lo. 

Não deixe de inclui-lo ao treino de costas e bíceps, separamos algumas dicas para sua execução.

Dicas de execução
1 – Caso Ainda não teve contato com a barra fixa opte por utilizar a pegada supinada (mão para baixo) pois é um poco mais fácil e de acordo com estudos o estimulo dos músculos é praticamente o mesmo.

2 – O ideal é uma série entre 8 a 12 repetições, caso ainda não consiga realizar peça ajuda a um parceiro para te dar apoio segurando suas canelas.

3 – não puxe a barra para traz do pescoço, isso pode causar danos nos ligamentos e tendões das articulações do ombro.

4 – Leve sempre seu peito para próximo da barra, isso garantirá uma ativação maior do dorsal.</td>
   </div>
  </div>
</table>

        <table>

<td><div style="font-family:courier,arial,helvetica;">
<img src="IMAGENS/costas2.jpg" alt="some text" width=500 height=500 align="left"></td>
  <td><div style="font-size: xx-large"> Remada unilateral com halter
    </div>  </br>
  <div class="header"width=500 height=500>
O principal exercício unilateral e mais famoso para o treino de costas.

Ótimo exercício para incluir no treino de costas e bíceps pois trabalha a região média das costas e possibilita um estimulo igual e eficaz para ambos os lados, trazendo assim melhores resultados aos músculos das costas como um todo.

Fornece também maior suporte à região lombar, devido à possibilidade de apoiar a mão livre.

</td>
   </div>
  </div>
</table>

        
</div>

</body>
</html>