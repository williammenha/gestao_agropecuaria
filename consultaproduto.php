<html>
	<head>
		<meta charset="utf-8">
		<title>CONSULTA PRODUTOS</title>

		<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		

		<div class="row">
			<div class="col s12 m8 push-m2">
				<br>
				<a href="index.html" class="btn">VOLTAR</a>
				<h4 class="light">PRODUTOS CADASTRADOS</h4>
				<table class="striped">
					<thead>
						<tr>							
							<th>PRODUTO</th>
							<th>VALIDADE</th>
							<th>OBSERVACAO</th>
							<th>ATIVO</th>
							<th>ALTERAR</th>							
						</tr>
					</thead>
					<tbody>
						<?php
						function convertedata($data)
						{
							$data_vetor = explode('-', $data);
							$novadata = implode('/', array_reverse($data_vetor));
							return $novadata;
						}
							include_once('conexao.php');
							$sql = "SELECT id, descricao, observacao, ativo FROM tb_produtos order by descricao";
							$resultado = mysqli_query($conexao,$sql);
							if(!$resultado){
								echo 'input type="button" onclik="windows.location='."'consulta.php'".';"value="Voltar"><br><br>';
								die('<b>Query Inválida:</b>'. @mysqli_error($conexao));
							}
							
							if(mysqli_num_rows($resultado) > 0)
							{
								while ($dados = mysqli_fetch_array($resultado))
								{								
									echo "<tr>";
										echo "<td align = 'center'>".$dados['descricao']."</td>";
										echo "<td align = 'center'>".$dados['validade']."</td>";
										echo "<td align = 'center'>".$dados['observacao']."</td>";
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
										echo "<td align = 'center'><a href = '.php?id=$id'>VISUALIZAR</a>";						
										echo "<td align = 'center'><a href = 'alterar.php?id=$id'>ALTERAR</a>";							
									echo "</tr>";
								
								}
							}
							mysqli_close($conexao);
						?>
					</tbody>
				</table>
				<br>
				<a href="cadproduto.php" class="btn">CADASTRAR PRODUTO</a>
				<a href="index.html" class="btn">VOLTAR</a>
			</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js">
		</script>
	</body>
</html>