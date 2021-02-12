<!-- 20793 - WILLIAM MENHA DE CAMPOS - 26/10/2020 -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>CADASTRO DE MEDIDAS</title>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin" action = "incluirtipo.php" method = "post">

         <?php
            ini_set('default_charset','UTF-8');
            include_once('conexao.php');
            $descricao = utf8_decode(mb_strtoupper(filter_input(INPUT_POST, 'txtDescricao', FILTER_SANITIZE_STRING)));
            $tipo = utf8_decode(mb_strtoupper(filter_input(INPUT_POST, 'txtTipo', FILTER_SANITIZE_NUMBER_INT)));
            $observacao = utf8_decode(mb_strtoupper(filter_input(INPUT_POST, 'txtObservacao', FILTER_SANITIZE_STRING)));
            $ativo = 1;

            $sqlinsert = "INSERT INTO tb_insumos(descricao, tipo, observacao, ativo) VALUES ('$descricao', $tipo, '$observacao', $ativo)";
            $resultado = mysqli_query($conexao, $sqlinsert);
            if (!$resultado)
            {
                die("Query Inválida: ".mysqli_error($conexao));
            }
            else
            {
                echo "<h3 align = 'center'>REGISTRO EFETUADO COM SUCESSO<h3>";
            }
            mysqli_close($conexao);
            echo '<meta http-equiv="refresh" content="2;URL=cadinsumo.php" />';
            echo '<br><br><h4 align = "center">Retornando à página de cadastro!</h4>';
        ?>     
    </form>
  </body>
</html>




