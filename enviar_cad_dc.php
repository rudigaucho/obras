



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
	setTimeout("window.location='cad_dc.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>CADASTRO EQUIPE</title>


</head>



<body>








<?php

$uf =$_POST['uf'];
$dc =$_POST['dc'];
$sigla_local =$_POST['sigla_local'];
$filtro =$_POST['filtro'];
$localidade =$_POST['localidade'];
$projeto =$_POST['projeto'];
$status =$_POST['status'];
$responsavel =$_POST['responsavel'];
$data =$_POST['date'];



$sql = mysql_query ("select * from dc where dc = '$dc'" );
$row = mysql_num_rows($sql);
 if  ($row >= 1)
{


echo "DC JÁ CADASTRADA VERIFIQUE!";
   
  

  
}
 else
 {

  



 



$query = "insert into dc (uf,dc,sigla,local,projeto,filtro,status,responsavel,data)";

$query.= "values ('$uf','$dc','$sigla_local','$localidade','$projeto','$filtro','$status','$responsavel','$data')";




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