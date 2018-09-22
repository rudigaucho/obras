



<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_mat.php'",7000);
	
	
}


</script> 

<?php

session_start();
if($_SESSION["senha"] != '1' )
{
  header("Location: index.php");
  exit;
  }



include "coon.php";








	

	
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_mat.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>CADASTRO MATERIAIS</title>


</head>



<body>








<?php

$pt =$_POST['pt'];



$tec =$_POST['tec'];



$sql = mysql_query ("select * from mat where cod = '$pt'" );
$row = mysql_num_rows($sql);
 if  ($row >= 1)
{


echo "MATERIAL JÁ CADASTRADO VERIFIQUE!";
   
  

  
}
 else
 {

  



 



$query = "insert into mat (cod,descricao)";

$query.= "values ('$pt','$tec')";




$sql = mysql_query($query);


if($sql )
{
  
  
    echo '  <h2>CADASTRADO COM SUCESSO!<br>';
  
  echo "<script>saidasuccessfully()</script>";
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}




}



?>

























</body>


</html>