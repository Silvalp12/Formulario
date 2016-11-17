<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TesteVaga</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/inicio.css" rel="stylesheet" type="text/css">

</head>

<body>
<?php

if ( isset( $_POST ) || empty( $_POST )) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	

 

	if (empty($nome)|| empty($email)|| empty($telefone)|| empty($endereco)){
		echo  "<div id='aviso'> Preencha Todos os Campos </div> <meta HTTP-EQUIV='refresh' CONTENT='2;URL=index.php'>";
	}else
		
		echo "<h2>Bem Vindo {$_POST['nome']}</h2>" ; 
		
	}
?>

</body>
</html >

