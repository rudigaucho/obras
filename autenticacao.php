


<!DOCTYPE html>
<html lang="pt-br">

<head>

<script type="text/javascript">
function loginsuccessfully()
{
	setTimeout("window.location='Cadastro.php'",3000);
	
	
}

function loginfailed()

{
	
	setTimeout("window.location='index.html'",3000);
	
}

</script>





  <link rel="icon" href="img/logo_oi.png">
<meta charset="UTF-8"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body>





<?php

$senha=$_POST['senha'];
$login=$_POST['login'];



	session_start();
	
	$_SESSION['senha']=$senha;
	$_SESSION['login'] =$login;

if($login = 'S&R3D3' and $senha == '1')
{



	
	
	echo "<h2 align='center'> Você foi logado (a) com sucesso!<br><br><br> <h2 style='text-align:center;'> <div> <a href='atua_mat.php'>MATERIAIS</a> <br><a href='atua_equipe.php'>EQUIPE</a> <br><a href='cad_dc.php'>DC</a> <br></div>";
	

	
}
else
{
	echo "<h2 align='center'>Senha de usuário inválida<h2>";
	echo "<script>loginfailed()</script>";
	
}

?>





















</body>


</html>