<html>
	<head>
		<meta charset="utf-8">
		<title>CONSULTA SETORES</title>

		<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		

		<div class="row">
			<div class="col s12 m8 push-m2">
				<br>
				<a href="index.html" class="btn">VOLTAR</a>
				<h4 class="light">INSUMOS CADASTRADOS</h4>
				<table class="striped">
					<thead>
						<tr>							
							<th>DESCRIÇÃO</th>
							<th>TIPO</th>
							<th>OBSERVAÇÃO</th>
							<th>ATIVO</th>
							<th>ALTERAR</th>							
						</tr>
					</thead>
					<tbody>
						<?php
							include_once('conexao.php');
							$sql = "SELECT i.id, i.descricao, t.descricao tipo, i.observacao, i.ativo FROM tb_insumos AS i LEFT JOIN tb_tipo AS t ON i.tipo = t.id ORDER BY i.descricao";
							$resultado = mysqli_query($conexao,$sql);
							if(!$resultado){
								die('<b>Query Inválida:</b>'. @mysqli_error($conexao));
							}							
							if(mysqli_num_rows($resultado) > 0)
							{
								while ($dados = mysqli_fetch_array($resultado))
								{								
									echo "<tr>";
										echo "<td align = 'center'>".utf8_encode($dados['descricao'])."</td>";
										echo "<td align = 'center'>".utf8_encode($dados['tipo'])."</td>";
										echo "<td align = 'center'>".utf8_encode($dados['observacao'])."</td>";
										if ($dados['ativo'] = 1)
										{
											$imagem = 'checado.jpg';
										} 
										else 
										{
											$imagem = 'naochecado.jpg';
										}
										$id = $dados['id'];
										echo "<td align = 'center'><img src='img/$imagem' width = '15px' height = '15px'>";
										echo "<td align = 'center'><a href = 'alterar.php?id=$id'>ALTERAR</a>";							
									echo "</tr>";
								
								}
							}
							mysqli_close($conexao);
						?>
					</tbody>
				</table>
				<br>
				<a href="cadinsumo.php" class="btn">CADASTRAR INSUMO</a>
				<a href="index.html" class="btn">VOLTAR</a>
			</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js">
		</script>
	</body>
</html>