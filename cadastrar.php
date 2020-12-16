<?php 
require_once 'CLASSES/usuarios.php';

$u = new Usuario;

/*
$servername = "localhost"; // Host do bando de dados.
$username = "root"; // Usuário que vai se connectar com o banco de dados
$password = "admin"; // Senha do usuário
 
try {
  $conn = new PDO("mysql:host=$servername;dbname=login", $username, $password); // conexão padrão para DB em MYSQL
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}*/
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
  <title>Cadastrar</title>
</head>
  <body>
    <div id="corpo-form-cad">
      <h1>Entrar</h1>
      <form method="POST">
       <input type="email" placeholder="Email" name='email'>
       <input type="text" placeholder="Nome Completo" name='nome'>
       <input type="text" placeholder="CPF" name='cpf' maxlength="11">
       <input type="text" placeholder="sexo" name='sexo'>
       <input type="date" placeholder="Data nascimento" name='datanasc' maxlength="10">
       <input type="text" placeholder="Cidade" name='cidade'>
       <input type="text" placeholder="Estado onde mora" name='estado'>

       <input type="text" placeholder="Peso atual" name='peso'>
       <input type="password" placeholder="Senha" name='senha'>
       <input type="password" placeholder="Confirme a senha" name='csenha'>
       <input type="submit" value="Cadastrar" class="entrar">

      </form>
    </br>
      <a href="index.php">Já tem Cadastro? <strong>Faça login!</strong></a>
              <div class="social_media">

          <h2><a href="home.php">Ir para Home</a>
      </div>
      
      <?php 




      //verificar se clicou no botao
       if(isset($_POST['nome']))
           {
              $nome = addslashes($_POST['nome']); //addslashes evita codigos maliciosos.
             
              $cpf = addslashes($_POST['cpf']); 
              
              $sexo = addslashes($_POST['sexo']); 
             
              $peso = addslashes($_POST['peso']); 
             
              $cidade = addslashes($_POST['cidade']); 
             
              $estado = addslashes($_POST['estado']); 

              $datanasc = addslashes($_POST['datanasc']);
              
              $email = addslashes($_POST['email']);
              
              $senha = addslashes($_POST['senha']);
              
              $csenha = addslashes( $_POST['csenha']);
  //verificando se todos os campos nao estao vazios
        if(!empty($nome)  && !empty($cpf)&& !empty($sexo)&& !empty($peso) && !empty($cidade)&& !empty($estado)&& !empty($email) && !empty($senha) && !empty($csenha)&& !empty($datanasc))
             {
              $u->conectar("projeto","localhost","root","admin");
                if ($u->msgErro=="") //conectado normalmente;
                  {
                    if ($senha == $csenha)
                      {
                        if ($u->cadastrar($nome,$email,$cpf,$sexo,$peso,$cidade,$estado,$datanasc, $senha))
                          {
?>
                            <div id='msg_sucesso'>
                              Cadastrado com sucesso!
                                </div>
 <?php
                          }else{
 ?>
                          <div class="msg_erro">
                             Email já cadastrado, retorne e faça login.
                          </div>
<?php
                               }
                      }else{
?>
                      <div class="msg_erro">
                            Senhas não conferem!
                      </div>
<?php
                            }
                  }else{
?>
                  <div class="msg_erro">
                  <?php echo "Erro: ".$u->msgErro;?>
                  </div>
<?php
                        }
              }else{
?>
               <div class="msg_erro">
                Preencha todos os campos!
                </div>
<?php
                   }
          }
?>


   </div>

  </body>
</html>