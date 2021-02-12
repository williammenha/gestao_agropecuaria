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
    <form class="form-signin" action = "incluirmedidas.php" method = "post">

      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">CADASTRO DE MEDIDAS</h1>        
      </div>


      <!-- Text input-->
      <div class="form-group">
        <label class="col-mb-4 control-label" for="txtMedida">MEDIDA</label>  
        <div class="col-mb-4">
          <input id="txtMedida" name="txtMedida" type="text" placeholder="descreva a medida" class="form-control input" required="" style="text-transform: uppercase;">       
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-mb-4 control-label" for="txtSigla">SIGLA</label>  
        <div class="col-mb-4">
          <input id="txtSigla" name="txtSigla" type="text" placeholder="digite a sligla com até duas letras. Ex: KG" class="form-control input" required="" style="text-transform: uppercase;">   
        </div>
      </div>
     
      <button class="btn btn-lg btn-primary btn-block" type="submit">CADASRTRAR</button>
      <a class="btn btn-lg btn-primary btn-block" href="consultamedida.php">VOLTAR</a>
      <p class="mt-5 mb-3 text-muted text-center">WMC SISTEMAS&copy; 2020</p>
    </form>
  </body>
</html>
