<?php
//require_once 'CLASSES/conexao.php';
$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}
Class Usuario
{
	private $pdo;
	public $msgErro = "";
	public function conectar($dbname,$host,$user,$pass)
	{
		global $pdo;
		try 
		{
			$pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$pass);
			// echo "Connected successfully";
		} catch (Exception $e) {
		$msgErro = $e->getMessage();
		}
	
	}	


 /* 	public function BuscarDados()
  	{
  				global $pdo;
      global $msgErro;
      

$consulta = $pdo->query("SELECT * FROM usuario");


while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "Nome: {$linha['nome']} - Usuário: {$linha['usuario']}<br />";
}


  	}*/

	public function cadastrar($nome,$email,$cpf,$sexo,$peso,$cidade,$estado,$datanasc, $senha)
	{
		global $pdo;
      global $msgErro;
      
		// verificar se existe
		$sql = $pdo->prepare("SELECT id FROM usuario WHERE email=:e");
;
		$sql->bindValue(":e", $email);
		
		$sql->execute();
		
		if($sql->rowCount()>0)
		{
			return false ;//ja esta cadastrado
				$msgErro = $e->getMessage();
		}else
		{
			//CREAT
			$sql = $pdo->prepare("INSERT INTO usuario (nome,senha,peso,sexo,cpf,datanasc,cidade,estado,email) VALUES(:n, :s, :p, :sx, :cpf ,:dt, :ci, :est, :e)");

			$sql->bindValue(":n",$nome);
			$sql->bindValue(":s",md5($senha));
			$sql->bindValue(":p",$peso);
			$sql->bindValue(":sx",$sexo);
			$sql->bindValue(":cpf",$cpf);
			$sql->bindValue(":dt",$datanasc);
			$sql->bindValue(":ci",$cidade);
			$sql->bindValue(":est",$estado);
			$sql->bindValue(":e",$email);
			$sql->execute();
			return true;

		}





	}





	

public function logar($email, $senha)
  	{
  		global $pdo;
      global $msgErro;
  		/*verificar se o email e senha estao cadastrados, se sim*/
	$sql = $pdo->prepare("SELECT id FROM usuario WHERE cpf=:e and senha =:s");
  		$sql->bindValue(":e", $email);
  		$sql->bindValue(":s", md5($senha));

  		$sql->execute();
  		if($sql->rowCount()>0) //verificando houve resposta na consulta
  		{
  			//entrar no sistema criando uma (sessao)
  			$dado = $sql->fetch(); //transforma o retorno da query em array com os nomes das colunas
  			session_start();  //iniciando a sessao
  			$_SESSION['id'] = $dado['id']; //armazena o id do usuario na sessao.

  			return true;  //logado com sucesso
  		}
  		else
  		{
  			return false; //erro ao logar.
  						$msgErro = $e->getMessage();
  		}
  	}



}

?>