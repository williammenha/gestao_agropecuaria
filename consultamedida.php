<html>
	<head>
		<meta charset="utf-8">
		<title>CONSULTA MEDIDAS</title>

		<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		

		<div class="row">
			<div class="col s12 m8 push-m2">
				<br>
				<a href="index.html" class="btn">VOLTAR</a>
				<a><h4 class="light">MEDIDAS CADASTRADAS </h4></a> 
				<table class="striped">
					<thead>
						<tr>							
							<th>MEDIDAS</th>
							<th>SIGLA</th>
							<th>ALTERAR</th>							
						</tr>
					</thead>
					<tbody>
						<?php						
							include_once('conexao.php');
							$sql = "SELECT id, descricao, sigla FROM tb_medidas order by descricao";
							$resultado = mysqli_query($conexao,$sql);
							if(!$resultado){
								echo 'input type="button" onclik="windows.location='."'consultamedidas.php'".';"value="Voltar"><br><br>';
								die('<b>Query Inválida:</b>'. @mysqli_error($conexao));
							}

							if(mysqli_num_rows($resultado) > 0)
							{
								while ($dados = mysqli_fetch_array($resultado))
								{								
									echo "<tr>";
										$id = $dados['id'];
										echo "<td align = 'center'>".utf8_encode($dados['descricao'])."</td>";
										echo "<td align = 'left'>".utf8_encode($dados['sigla'])."</td>";										
										echo "<td align = 'center'><a href = 'alterar.php?id=$id'>ALTERAR</a>";									
									echo "</tr>";								
								}
							}
							mysqli_close($conexao);
						?>
					</tbody>
				</table>
				<br>
				<a href="cadmedidas.php" class="btn">CADASTRAR MEDIDAS</a>
				<a href="index.html" class="btn">VOLTAR</a>
			</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js">
		</script>
	</body>
</html>