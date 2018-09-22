<?php
 
include "coon.php";
 
$localidade = $_POST['localidade'];
 
$sql = "SELECT * FROM dc WHERE local = '$localidade' ";
$qr = mysql_query($sql) or die(mysql_error());
 
if(mysql_num_rows($qr) == 0){
   echo  '<option value="0">'.htmlentities('Não há DC').'</option>';
    
}else{
   while($ln = mysql_fetch_assoc($qr)){
      echo '<option value="'.$ln['dc'].'">'.$ln['dc'].'</option>';
   }
}
 
?>