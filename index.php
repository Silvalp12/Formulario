<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TesteVaga</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/inicio.css" rel="stylesheet" type="text/css">

</head>

<body>
<div class="jumbotron">
  <div class="container">

 <div id="tela">
     <div id="titulo"><h3>Cadastro de Usuários </h3></div>
     
   	 <h5>Preencha todos os campos corretamente  </h5>
     <form  action="verifica.php" method="post">
     <div class="form-group"><label> Nome <input type="text" class="form-group" name="nome" id="nome" /></label></div>
     <div class="form-group"><label> Email<input type="text" class="form-group" name="email" id="email"/></label></div>
     <div class="form-group"><label> Telefone<input type="text" class="form-group" name="telefone" id="telefone"/></label></div>
     <div class="form-group"><label> Endereço<input type="text" class="form-group" name="endereco" id="endereco"/></label></div>
    
     <button type="submit" name='acao' class="btn btn-primary">  <span class="glyphicon glyphicon-thumbs-up"></span> Cadastrar</button>
     
     
     
     </form>
   
    </div>
    
</div>

</div>


</body>
</html>

