



<!DOCTYPE html>



<html lang="pt-br">
<head>

 <style>
     #jumbo{
  background: url(empresa.jpg) no-repeat;

}
  </style>
<link rel="icon" href="logo.png">






<!--   FIM FUNCAO                            -->







  <meta charset="utf-8">

<link rel="stylesheet"  href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet"  href="/resources/demos/style.css">



<script type="text/javascript" src="jquery-ui.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>
<script type="text/javascript" src="validacao.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>









<link rel="icon" href="img/logo_oi.ico">




<style>
 footer {
      background-color: #555;
      color: white;
      padding: 15px;
       text-align:center;
    }
  .container-fluid
  {
  background-color: orange;
  }
  #realcar
  {
  background-color: grey;
  }
   #realcar2
  {
  background-color: #D3D3D3;
  }

  #loading
{
  
width:70px;
height:70px;  
  
  
  
  
}



</style>
  <title>CADASTRO </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->

</head>
<body>


<?php 

 include "coon.php";




$id =$_GET['id'];

$sql = mysql_query ("select * from principal where  protocolo = '$id' " );







  while ($dado = mysql_fetch_assoc($sql )){

   $protocolo =$dado['protocolo'];
     $numero_obra =$dado['numero_obra'];
     $ddd =$dado['ddd'];
  $localidade =$dado['localidade'];
$estacao =$dado['estacao'];

$equipe =$dado['equipe'];
$gestor =$dado['gestor'];
$endereco =$dado['endereco'];
$ponto_ref =$dado['ponto_ref'];
$n_foto =$dado['n_foto'];
$optradio =$dado['optradio'];
$obs =$dado['obs'];
 $data =$dado['data'];
$uf =$dado['uf'];
$n_cx =$dado['n_caixa'];
$n_foto =$dado['n_foto'];
$obs =$dado['obs'];
$ard =$dado['ard'];
$tipo_ard =$dado['tipo_ard'];
$tipo_atv =$dado['tipo_atv'];
$chave =$dado['chave'];
$foto_antes =$dado['foto_antes'];
$foto_depois =$dado['foto_depois'];
$croqui =$dado['croqui'];


  }





 






 $sql2 = mysql_query ("select * from bin_cx where  id_prot = '39063619' and  par = '1' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel1 =$dado['tel'];
$cabo1 =$dado['cabo'];
$pri1 =$dado['pri'];
$ard1 =$dado['ard'];
$sec1 =$dado['sec'];
$cx1 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '2' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel2 =$dado['tel'];
$cabo2 =$dado['cabo'];
$pri2 =$dado['pri'];
$ard2 =$dado['ard'];
$sec2 =$dado['sec'];
$cx2 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '3' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel3 =$dado['tel'];
$cabo3 =$dado['cabo'];
$pri3 =$dado['pri'];
$ard3 =$dado['ard'];
$sec3 =$dado['sec'];
$cx3 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '4' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel4 =$dado['tel'];
$cabo4 =$dado['cabo'];
$pri4 =$dado['pri'];
$ard4 =$dado['ard'];
$sec4 =$dado['sec'];
$cx4 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '5' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel5 =$dado['tel'];
$cabo5 =$dado['cabo'];
$pri5 =$dado['pri'];
$ard5 =$dado['ard'];
$sec5 =$dado['sec'];
$cx5=$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '6' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel6 =$dado['tel'];
$cabo6 =$dado['cabo'];
$pri6 =$dado['pri'];
$ard6 =$dado['ard'];
$sec6 =$dado['sec'];
$cx6 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '7' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel7 =$dado['tel'];
$cabo7 =$dado['cabo'];
$pri7 =$dado['pri'];
$ard7 =$dado['ard'];
$sec7 =$dado['sec'];
$cx7 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '8' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel8 =$dado['tel'];
$cabo8 =$dado['cabo'];
$pri8 =$dado['pri'];
$ard8 =$dado['ard'];
$sec8 =$dado['sec'];
$cx8 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '9' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel9 =$dado['tel'];
$cabo9 =$dado['cabo'];
$pri9 =$dado['pri'];
$ard9 =$dado['ard'];
$sec9 =$dado['sec'];
$cx9 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '10' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel10 =$dado['tel'];
$cabo10 =$dado['cabo'];
$pri10 =$dado['pri'];
$ard10 =$dado['ard'];
$sec10 =$dado['sec'];
$cx10 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '11' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel11 =$dado['tel'];
$cabo11 =$dado['cabo'];
$pri11 =$dado['pri'];
$ard11 =$dado['ard'];
$sec11 =$dado['sec'];
$cx11 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '12' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel12 =$dado['tel'];
$cabo12 =$dado['cabo'];
$pri12 =$dado['pri'];
$ard12 =$dado['ard'];
$sec12 =$dado['sec'];
$cx12 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '13' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel13 =$dado['tel'];
$cabo13 =$dado['cabo'];
$pri13 =$dado['pri'];
$ard13 =$dado['ard'];
$sec13 =$dado['sec'];
$cx13 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '14' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel14=$dado['tel'];
$cabo14 =$dado['cabo'];
$pri14 =$dado['pri'];
$ard14 =$dado['ard'];
$sec14 =$dado['sec'];
$cx14 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '15' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel15 =$dado['tel'];
$cabo15 =$dado['cabo'];
$pri15 =$dado['pri'];
$ard15 =$dado['ard'];
$sec15 =$dado['sec'];
$cx15 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '16' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel16 =$dado['tel'];
$cabo16 =$dado['cabo'];
$pri16 =$dado['pri'];
$ard16 =$dado['ard'];
$sec16 =$dado['sec'];
$cx16 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '17' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel17 =$dado['tel'];
$cabo17 =$dado['cabo'];
$pri17 =$dado['pri'];
$ard17 =$dado['ard'];
$sec17 =$dado['sec'];
$cx17 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '18' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel18 =$dado['tel'];
$cabo18 =$dado['cabo'];
$pri18 =$dado['pri'];
$ard18 =$dado['ard'];
$sec18 =$dado['sec'];
$cx18 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '19' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel19 =$dado['tel'];
$cabo19 =$dado['cabo'];
$pri19 =$dado['pri'];
$ard19 =$dado['ard'];
$sec19 =$dado['sec'];
$cx19 =$dado['cx'];
}

$sql2 = mysql_query ("select * from bin_cx where  id_prot = '$id' and  par = '20' " );
  while ($dado = mysql_fetch_assoc($sql2 ))
  {
$tel20 =$dado['tel'];
$cabo20 =$dado['cabo'];
$pri20 =$dado['pri'];
$ard20 =$dado['ard'];
$sec20 =$dado['sec'];
$cx20 =$dado['cx'];
}








?>

<div class="jumbotron text-center " id="jumbo">
  <br><br><br><br><br><br><br>
</div>


  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
       
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="Cadastro.php">Voltar</a></li>
        
       


 
      
 
    
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>


<div class="container">


<div class="row content">


    <div class="col-sm-10 ">





    <div class="panel-primary class">
  <div class="panel-heading">RELATÓRIO</div>
  <div class="panel-body">
    
<label for="">PROTOCOLO:  <label for=""><?php echo $protocolo; ?></label><br>
<label for="">DC:  <label for=""><?php echo $numero_obra; ?></label><br>
<label for="">DDD:  <label for=""><?php echo $ddd; ?></label><br>
<label for="">UF:  <label for=""><?php echo $uf; ?></label><br>
<label for="">ESTAÇÃO:  <label for=""><?php echo $estacao; ?></label><br>
<label for="">LOCALIDADE:  <label for=""><?php echo $localidade; ?></label><br>
<label for="">EQUIPE:  <label for=""><?php echo $equipe; ?></label><br>
<label for="">RESPONSÁVEL:  <label for=""><?php echo $gestor; ?></label><br>
<label for="">DATA/HORA:  <label for=""><?php echo $data; ?></label><br>
<label for="">ENDEREÇO:  <label for=""><?php echo $endereco; ?></label><br>
<label for="">PONTO REFERÊNCIA:  <label for=""><?php echo $ponto_ref; ?></label><br>
<label for="">TIPO POSTE:  <label for=""><?php echo $tipo_ard; ?></label><br>
<label for="">TIPO ATIVIDADE:  <label for=""><?php echo $tipo_atv; ?></label><br>
<label for="">N° CAIXA:  <label for=""><?php echo $n_caixa; ?></label><br>
<label for="">N° FOTO:  <label for=""><?php echo $n_foto; ?></label><br>
<label for="">ARD:  <label for=""><?php echo $ard; ?></label><br>
<label for="">CHAVE:  <label for=""><?php echo $chave; ?></label><br>
<fieldset style="border: 1px solid black; padding:12px;">
<label for="">OBS:  <label for=""><?php echo $obs; ?></label><br>
</fieldset>

<br><br><br>
<table class="table table-bordered" id="tb1" name="tb1">
    <span><strong>BINAGEM DE CX (1):</strong></span><br><br>
    <thead>
      <tr>
        <th>PAR</th>
        <th>TELEFONE</th>
        <th>CABO</th>
        <th>PRIMÁRIO</th>
        <th>ARD</th>
        <th>SECUNDÁRIO</th>
        <th>CAIXA</th>
       
      


      </tr>
    </thead>
    <tbody> 
      <tr>
        <td> 1</td>
        <td> <?php echo $tel1; ?> </td>
        <td> <?php echo $cabo1; ?></td>
        <td> <?php echo $pri1; ?></td>
        <td> <?php echo $ard1; ?></td>
        <td> <?php echo $sec1; ?></td>
        <td> <?php echo $cx1; ?></td>
        
        
      </tr>
      <tr>
        <td>2</td>
         <td> <?php echo $tel2; ?> </td>
        <td> <?php echo $cabo2; ?></td>
        <td> <?php echo $pri2; ?></td>
        <td> <?php echo $ard2; ?></td>
        <td> <?php echo $sec2; ?></td>
        <td> <?php echo $cx2; ?></td>
    
      </tr>
      <tr>
         <td>3</td>
         <td> <?php echo $tel3; ?> </td>
        <td> <?php echo $cabo3; ?></td>
        <td> <?php echo $pri3; ?></td>
        <td> <?php echo $ard3; ?></td>
        <td> <?php echo $sec3; ?></td>
        <td> <?php echo $cx3; ?></td>
       
     
      </tr>
      <tr>
         <td>4</td>
       <td> <?php echo $tel4; ?> </td>
        <td> <?php echo $cabo4; ?></td>
        <td> <?php echo $pri4; ?></td>
        <td> <?php echo $ard4; ?></td>
        <td> <?php echo $sec4; ?></td>
        <td> <?php echo $cx4; ?></td>
       
     
      </tr>
      <tr>
         <td>5</td>
       <td> <?php echo $tel5; ?> </td>
        <td> <?php echo $cabo5; ?></td>
        <td> <?php echo $pri5; ?></td>
        <td> <?php echo $ard5; ?></td>
        <td> <?php echo $sec5; ?></td>
        <td> <?php echo $cx5; ?></td>
       
     
      </tr>
      <tr>
         <td>6</td>
       <td> <?php echo $tel6; ?> </td>
        <td> <?php echo $cabo6; ?></td>
        <td> <?php echo $pri6; ?></td>
        <td> <?php echo $ard6; ?></td>
        <td> <?php echo $sec6; ?></td>
        <td> <?php echo $cx6; ?></td>
       
     
      </tr>
      <tr>
         <td>7</td>
     <td> <?php echo $tel7; ?> </td>
        <td> <?php echo $cabo7; ?></td>
        <td> <?php echo $pri7; ?></td>
        <td> <?php echo $ard7; ?></td>
        <td> <?php echo $sec7; ?></td>
        <td> <?php echo $cx7; ?></td>
     
      </tr>
      <tr>
         <td>8</td>
    <td> <?php echo $tel8; ?> </td>
        <td> <?php echo $cabo8; ?></td>
        <td> <?php echo $pri8; ?></td>
        <td> <?php echo $ard8; ?></td>
        <td> <?php echo $sec8; ?></td>
        <td> <?php echo $cx8; ?></td>
       
     
      </tr>
      <tr>
         <td>9</td>
         <td> <?php echo $tel9; ?> </td>
        <td> <?php echo $cabo9; ?></td>
        <td> <?php echo $pri9; ?></td>
        <td> <?php echo $ard9; ?></td>
        <td> <?php echo $sec9; ?></td>
        <td> <?php echo $cx9; ?></td>
       
     
      </tr>
      <tr>
         <td>10</td>
          <td> <?php echo $tel10; ?> </td>
        <td> <?php echo $cabo10; ?></td>
        <td> <?php echo $pri10; ?></td>
        <td> <?php echo $ard10; ?></td>
        <td> <?php echo $sec10; ?></td>
        <td> <?php echo $cx10; ?></td>
     
      </tr>
    </tbody>




    
  </table>

  <br><br><br>

  <table class="table table-bordered" id="tb1" name="tb1">
    <span><strong>BINAGEM DE CX (2):</strong></span><br><br>
    <thead>
      <tr>
        <th>PAR</th>
        <th>TELEFONE</th>
        <th>CABO</th>
        <th>PRIMÁRIO</th>
        <th>ARD</th>
        <th>SECUNDÁRIO</th>
        <th>CAIXA</th>
       
      


      </tr>
    </thead>
    <tbody> 
      <tr>
        <td> 1</td>
        <td> <?php echo $tel11; ?> </td>
        <td> <?php echo $cabo11; ?></td>
        <td> <?php echo $pri11; ?></td>
        <td> <?php echo $ard11; ?></td>
        <td> <?php echo $sec11; ?></td>
        <td> <?php echo $cx11; ?></td>
        
        
      </tr>
      <tr>
        <td>2</td>
         <td> <?php echo $tel12; ?> </td>
        <td> <?php echo $cabo12; ?></td>
        <td> <?php echo $pri12; ?></td>
        <td> <?php echo $ard12; ?></td>
        <td> <?php echo $sec12; ?></td>
        <td> <?php echo $cx12; ?></td>
    
      </tr>
      <tr>
         <td>3</td>
         <td> <?php echo $tel13; ?> </td>
        <td> <?php echo $cabo13; ?></td>
        <td> <?php echo $pri13; ?></td>
        <td> <?php echo $ard13; ?></td>
        <td> <?php echo $sec13; ?></td>
        <td> <?php echo $cx13; ?></td>
       
     
      </tr>
      <tr>
         <td>4</td>
       <td> <?php echo $tel14; ?> </td>
        <td> <?php echo $cabo14; ?></td>
        <td> <?php echo $pri14; ?></td>
        <td> <?php echo $ard14; ?></td>
        <td> <?php echo $sec14; ?></td>
        <td> <?php echo $cx14; ?></td>
       
     
      </tr>
      <tr>
         <td>5</td>
       <td> <?php echo $tel15; ?> </td>
        <td> <?php echo $cabo15; ?></td>
        <td> <?php echo $pri15; ?></td>
        <td> <?php echo $ard15; ?></td>
        <td> <?php echo $sec15; ?></td>
        <td> <?php echo $cx15; ?></td>
       
     
      </tr>
      <tr>
         <td>6</td>
       <td> <?php echo $tel16; ?> </td>
        <td> <?php echo $cabo16; ?></td>
        <td> <?php echo $pri16; ?></td>
        <td> <?php echo $ard16; ?></td>
        <td> <?php echo $sec16; ?></td>
        <td> <?php echo $cx16; ?></td>
       
     
      </tr>
      <tr>
         <td>7</td>
     <td> <?php echo $tel17; ?> </td>
        <td> <?php echo $cabo17; ?></td>
        <td> <?php echo $pri17; ?></td>
        <td> <?php echo $ard17; ?></td>
        <td> <?php echo $sec17; ?></td>
        <td> <?php echo $cx17; ?></td>
     
      </tr>
      <tr>
         <td>8</td>
    <td> <?php echo $tel18; ?> </td>
        <td> <?php echo $cabo18; ?></td>
        <td> <?php echo $pri18; ?></td>
        <td> <?php echo $ard18; ?></td>
        <td> <?php echo $sec18; ?></td>
        <td> <?php echo $cx18; ?></td>
       
     
      </tr>
      <tr>
         <td>9</td>
         <td> <?php echo $tel19; ?> </td>
        <td> <?php echo $cabo19; ?></td>
        <td> <?php echo $pri19; ?></td>
        <td> <?php echo $ard19; ?></td>
        <td> <?php echo $sec19; ?></td>
        <td> <?php echo $cx19; ?></td>
       
     
      </tr>
      <tr>
         <td>10</td>
          <td> <?php echo $tel20; ?> </td>
        <td> <?php echo $cabo20; ?></td>
        <td> <?php echo $pri20; ?></td>
        <td> <?php echo $ard20; ?></td>
        <td> <?php echo $sec20; ?></td>
        <td> <?php echo $cx20; ?></td>
     
      </tr>
    </tbody>




    
  </table>

  
  <table class="table table-hover">

    <thead>
      <tr >
       <th>MATERIAL</th>
       <th>QUANTIDADE</th>
      
      
   
    
      
       
      </tr>
    </thead>
  
  <?php


 



$sql = mysql_query ("select * from materiais where id_prot = '$id' " );







  while ($dado = mysql_fetch_assoc($sql )){

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <tbody>


     <tr style="color:red">




      <tr class="sucess">

   
  <td> <?php echo $dado ["cod_descricao"];  ?></td>    
<td> <?php echo $dado ["qtd"];  ?></td>













  








<?php }   ?>



















         </div>
         </table>



 <?php echo "<img src='fotos/$foto_antes' class='img-rounded' alt='' width='300' height='300'>" ?>
   <?php echo "<img src='fotos/$foto_depois' class='img-rounded' alt='' width='300' height='300'>" ?> 
<?php echo "<img src='fotos/$croqui' class='img-rounded' alt='' width='300' height='300'>" ?> 



















  </div>
</div>

    

 </div>




</body>
</html>



