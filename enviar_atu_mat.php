<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='atua_mat.php'",3000);
	
	
}
</script> 


<?php 



?>

<?php
include "coon.php";
//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {




?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='atua_mat.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

 <title>EDITAR MATERIAL</title>


</head>



<body>








<?php









  




$pt =$_POST['pt'];
$tec =$_POST['tec'];








$query = "update mat set  cod ='$pt',descricao ='$tec'  where cod ='$pt'";




$sql = mysql_query($query);


if($sql )
{
  
  
    echo ' <h2>EDITADO COM SUCESSO!';
  

  echo "<script>saidasuccessfully()</script>";

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}










?>






















</body>


</html>