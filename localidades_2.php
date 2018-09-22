<?php
 
include "coon.php";
 
$sigla_local = $_POST['sigla_local'];
 
$sql = "SELECT * FROM localidades WHERE sigla_local = '$sigla_local' ";
$qr = mysql_query($sql) or die(mysql_error());
 
if(mysql_num_rows($qr) == 0){
   echo  '<option value="0">'.htmlentities('Não há localidades').'</option>';
    
}else{
   while($ln = mysql_fetch_assoc($qr)){
      echo '<option value="'.$ln['local'].'">'.$ln['local'].'</option>';
   }
}
 
?>