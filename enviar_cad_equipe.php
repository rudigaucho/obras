



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
	setTimeout("window.location='cad_equipe.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>CADASTRO EQUIPE</title>


</head>



<body>








<?php

$matricula =$_POST['matricula'];
$status =$_POST['status'];
$responsavel =$_POST['responsavel'];

$uf =$_POST['uf'];



$sql = mysql_query ("select * from equipe where matricula = '$matricula'" );
$row = mysql_num_rows($sql);
 if  ($row >= 1)
{


echo "EQUIPE JÁ CADASTRADA VERIFIQUE!";
   
  

  
}
 else
 {

  



 



$query = "insert into equipe (uf,matricula,status,responsavel)";

$query.= "values ('$uf','$matricula','$status','$responsavel')";




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