<?php
	include_once("conexao.php");
	$nome_usuario = $_POST['nome'];
	$curso_usuario = $_POST['curso'];
	$cidade_usuario = $_POST['cidade'];
	$modulo_usuario = $_POST['modulo'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$situacao = $_POST['situacao'];
	$nivel = $_POST['nivel'];
	//echo "$nome_usuario - $email_usuario";
	
	$result_usuario = "INSERT INTO usuarios(nome, curso, cidade, modulo, usuario, senha, situacao, nivel) VALUES ('$nome_usuario','$curso_usuario','$cidade_usuario','$modulo_usuario','$usuario', sha1('$senha'),'$situacao','$nivel')";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sistema-de-login-em-php/cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"Usuario cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sistema-de-login-em-php/cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"O Usuario não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
?>

