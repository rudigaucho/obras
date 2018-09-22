<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='atua_equipe.php'",3000);
	
	
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
	setTimeout("window.location='atua_equipe.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

 <title>EDITAR EQUIPE</title>


</head>



<body>








<?php









  




$equipe =$_POST['equipe'];
$uf =$_POST['uf'];
$status =$_POST['status'];
$resp =$_POST['resp'];








$query = "update equipe set  uf ='$uf',status ='$status',responsavel ='$resp'   where matricula ='$equipe'";




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