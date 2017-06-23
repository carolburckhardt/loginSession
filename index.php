<?php
    //verificar se está logado
    session_start();

    $existe = isset($_SESSION['esta_logado']);

    if($existe == false){
        //redirecionar
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

	<div class="social">

		<a href="verifica_usuario.php?acao=sair" class="sair">sair</a>

		<img src="http://g.glbimg.com/og/gs/gsat4/f/thumbs/materia/2016/06/20/luan-santana.png" alt="" width="200" height="200">
		<h3>Bem vindo!</h3>
	</div>

</body>
</html>