<!-- 20793 - WILLIAM MENHA DE CAMPOS - 26/10/2020 -->
<?php
	$nome_servidor = "localhost";
	$nome_usuario = "root";
	$senha = "";
	$nome_banco = "bd_agropecuaria";
	$conexao = mysqli_connect($nome_servidor, $nome_usuario, $senha, $nome_banco);

	if(mysqli_connect_error())
	{
		echo "Problemas com a conexão do Banco de dados".mysqli_connect_error();
	}
?>