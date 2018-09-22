<?php
 
include "coon.php";
 
$ddd = $_POST['ddd'];
 
$sql = "SELECT * FROM localidades WHERE ddd = '$ddd' group by estacao";
$qr = mysql_query($sql) or die(mysql_error());
 
if(mysql_num_rows($qr) == 0){
   echo  '<option value="0">'.htmlentities('Não há estacao').'</option>';
    
}else{
   while($ln = mysql_fetch_assoc($qr)){
      echo '<option value="'.$ln['estacao'].'">'.$ln['estacao'].'</option>';
   }
}
 
?>