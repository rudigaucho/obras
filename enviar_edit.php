<?php 

include "coon.php";





session_start();
if($_SESSION["senha"] != '1' )
{
  header("Location: index.php");
  exit;
  }



 



  $dc =$_POST['dc'];
  $uf =$_POST['uf'];
  $sigla_local =$_POST['sigla_local'];
  $local =$_POST['local'];
  $projeto =$_POST['projeto'];
  $filtro =$_POST['filtro'];
  $status =$_POST['status'];
  $responsavel =$_POST['responsavel'];










$query = "update dc set dc ='$dc',uf ='$uf',sigla ='$sigla_local',local ='$local',projeto ='$projeto',filtro ='$filtro',status ='$status
',responsavel ='$responsavel' where dc = '$dc'";






$sql = mysql_query($query);


if($sql )
{
  
  
    echo ' <h2>EDITADA COM SUCESSO!';
  
 echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=edit_dc.php">';
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}








  ?>
