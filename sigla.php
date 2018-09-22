<?php
 
include "coon.php";
 
$estacao = $_POST['estacao'];
 
$sql = "SELECT * FROM localidades WHERE estacao = '$estacao' order by local";
$qr = mysql_query($sql) or die(mysql_error());
 
if(mysql_num_rows($qr) == 0){
   echo  '<option value="0">'.htmlentities('Não há localidades').'</option>';
    
}else{
   while($ln = mysql_fetch_assoc($qr)){
      echo '<option value="'.$ln['local'].'">'.$ln['local'].'</option>';
   }
}
 
?>