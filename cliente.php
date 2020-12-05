<?php
	session_start();
	echo "Usuario: ". $_SESSION['usuarioNome'];	
?>
<br>
<h1>Tela Cliente</h1>
<a href="sair.php">Sair</a>