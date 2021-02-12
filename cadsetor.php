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
    <title>CADASTRO DE SETORES</title>
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
    <form class="form-signin" action = "incluirsetor.php" method = "post">

      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">CADASTRO SETOR PRODUTIVO</h1>
      </div>


      <!-- Text input-->
      <div class="form-group">
        <label class="col-mb-4 control-label" for="txtMarca">DESCRIÇÃO</label>  
        <div class="col-mb-4">
          <input id="txtDescricao" name="txtDescricao" type="text" placeholder="digite o nome do setor" class="form-control input" required="" style="text-transform: uppercase;">       
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-mb-4 control-label" for="txtModelo">DATA CRIAÇÃO</label>  
        <div class="col-mb-4">
          <input id="txtDatainicial" name="txtDatainicial" type="date" class="form-control input" required="" style="text-transform: uppercase;">     
        </div>
      </div>
      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-mb-4 control-label" for="txtTipo" >TIPO</label>
        <div class="col-mb-4">
          <select id="txtTipo" name="txtTipo" class="form-control" style="text-transform: uppercase;">
            <option selected="">SELECIONE...</option>
            <?php
              include_once('conexao.php');
              $sql = "SELECT id, descricao FROM tb_tipo ORDER BY descricao";
              $resultado = mysqli_query($conexao, $sql);
              if(mysqli_num_rows($resultado) > 0)
              {
                while ($dados = mysqli_fetch_array($resultado))
                { 
                  
                 echo "<option value='".$dados['id']."'>".utf8_encode($dados['descricao'])."</option>";
                  
                }              
              }
              mysqli_close($conexao);
            ?>

          </select>
        </div>
      </div>      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-mb-4 control-label" for="txtProprietario">OBSERVAÇÕES</label>  
        <div class="col-mb-4">
        <textarea id="txtObservacao" name="txtObservacao" type="text" placeholder="digite observações sobre o tipo cadastrado" class="form-control input-md" required="" style="text-transform: uppercase;"></textarea>  
        </div>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">CADASTRAR</button>
      <a class="btn btn-lg btn-primary btn-block" href="consultasetor.php">VOLTAR</a>
      <p class="mt-5 mb-3 text-muted text-center">WMC SISTEMAS&copy; 2020</p>
    </form>
  </body>
</html>
