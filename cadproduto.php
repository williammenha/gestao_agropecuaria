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
    <title>CADASTRO DE PRODUTOS</title>
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
    <form class="form-signin" action = "incluir.php" method = "post">

      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">CADASTRO DE PRODUTO</h1>       
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-mb-4 control-label" for="txtDescricao">DESCRIÇÃO</label>  
        <div class="col-mb-4">
          <input id="txtDescricao" name="txtDescricao" type="text" placeholder="descreva o produto" class="form-control input" required="" style="text-transform: uppercase;">       
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-mb-4 control-label" for="txtValidade">VALIDADE</label>  
        <div class="col-mb-4">
          <input id="txtValidade" name="txtValidade" type="number" placeholder="digite a validade em dias" class="form-control input" required="" style="text-transform: uppercase;">     
        </div>
      </div>
      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-mb-4 control-label" for="txtCor" >Cor</label>
        <div class="col-mb-4">
          <select id="txtCor" name="txtCor" class="form-control" style="text-transform: uppercase;">
            <option value="Cor não definida">Selecione a cor...</option>
            <option value="Amarelo">Amarelo</option>
            <option value="Azul">Azul</option>
            <option value="Branco">Branco</option>
            <option value="Cinza">Cinza</option>
            <option value="Prata">Prata</option>
            <option value="Preto">Preto</option>
            <option value="Verde">Verde</option>
            <option value="Vermelho">Vermelho</option>
          </select>
        </div>
      </div>
      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-mb-4 control-label" for="txtCombustivel">Combustível</label>
        <div class="col-mb-4">
          <select id="txtCombustivel" name="txtCombustivel" class="form-control" style="text-transform: uppercase;">
            <option value="Combustível não definido">Selecione o combustível...</optionstyle="text-transform: uppercase;">
            <option value="Diesel">Diesel</option>
            <option value="Etanol">Etanol</option>
            <option value="Gás">Gás</option>
            <option value="Gasolina">Gasolina</option>
            <option value="Elétrico">Elétrico</option>
          </select>
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-mb-4 control-label" for="txtProprietario">Proprietário</label>  
        <div class="col-mb-4">
        <input id="txtProprietario" name="txtProprietario" type="text" placeholder="digite o nome do proprietário" class="form-control input-md" required="" style="text-transform: uppercase;">  
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-mb-4 control-label" for="txtValor">Valor</label>  
        <div class="col-mb-4">
          <input id="txtValor" name="txtValor" type="text" placeholder="digite o valor do automóvel" class="form-control" pattern="[0-9]{1,10}.[0-9]{2}$">
          <span class="help-block">Ex. 111111111,11</span>          
        </div>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">CADASRTRAR</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2020</p>
    </form>
  </body>
</html>
