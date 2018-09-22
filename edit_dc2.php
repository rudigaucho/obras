



<!DOCTYPE html>



<html lang="pt-br">
<head>

  <?php 
include "coon.php"; 

session_start();
if($_SESSION["senha"] != '1' )
{
  header("Location: index.php");
  exit;
  }



 ?>

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

<script type="text/javascript">
       
      $(document).ready(function(){
          
         $("select[name=sigla_local]").change(function(){
            $("select[name=local]").html('<option value="0">Carregando...</option>');
             
            $.post("localidades_2.php",
                  {sigla_local:$(this).val()},
                  function(valor){
                     $("select[name=local]").html(valor);
                  }
                  )
             
         })
            })
       
</script>










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
  <title>EDITAR DC</title>
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





$dc =$_POST['dc'];





$sql = mysql_query ("select * from dc where dc = '$dc'" );

$row = mysql_num_rows($sql);


if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
$uf = $dado["uf"];
$dc = $dado["dc"];
$sigla = $dado["sigla"];
$local = $dado["local"];
$projeto = $dado["projeto"];
$filtro = $dado["filtro"];
$status = $dado["status"];
$responsavel = $dado["responsavel"];
$data = $dado["data"];



}
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
      <li class="active"><a href="edit_dc.php">Voltar</a></li>
        
       


 
      
 
    
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>

<span><strong>EDITAR DC</strong></span><br><br><br><br>

<div class="container">


<div class="row content">


    <div class="col-sm-10 "  >

   

  <form class="form" role="form" name="seachform" method="post" action="enviar_edit.php"  >

    <input type="hidden" class="form-control"  name="protocolo"  value="<?php echo $protocolo ?>" >

  <div class="form-group">

      <label for="email">DC:</label>  
      <input type="text" class="form-control" id="dc" name="dc"  value="<?php echo $dc ?>" required>
    </div>

       <div class="form-group">
          <label for="email" >UF:</label> 
       <select class="form-control" name="uf">
         <option value="<?php echo $uf ?>"> <?php echo $uf ?> </option>
       <option value="PR">PR</option>
       <option value="SC">SC</option>
        
        
    </select>
    </div>
   <div class="form-group">  
    <label for="email" >SIGLA DA LOCALIDADE:</label> <br>
    <select class="form-control"  name="sigla_local">
          <option value="<?php echo $sigla ?>"> <?php echo $sigla ?> </option>

        <?php
     
          
         $sql = "SELECT * FROM localidades order by sigla_local";
         $qr = mysql_query($sql) or die(mysql_error());
         while($ln = mysql_fetch_assoc($qr)){
            echo '<option value="'.$ln['sigla_local'].'">'.$ln['sigla_local'].'</option>';
         }
      ?>
    </select>
        </div> 

    <div class="form-group">  
    <label for="email" >LOCALIDADE:</label> <br>
    <select  name="local">
      <option value="<?php echo $local ?>"> <?php echo $local ?> </option>
    </select>
        </div>

      <div class="form-group">




      <label for="email">TIPO DE PROJETO:</label>  
      <input type="text" class="form-control" id="projeto" name="projeto"  value="<?php echo $projeto ?>" required>
    </div>

   

      <div class="form-group">
          <label for="email" >FILTRO:</label> 
       <select class="form-control" name="filtro">
       <option value="<?php echo $filtro ?>"> <?php echo $uf ?> </option>
       <option value="ACIONA">ACIONA</option>
       <option value="AREA NOBRE">AREA NOBRE</option>
       <option value="PMP">PMP</option>
       <option value="PMP_156">PMP_156</option>
       <option value="PMP_ANOBRE">PMP_ANOBRE</option>
       <option value="PMP_EMERG">PMP_EMERG</option>
       <option value="PMP_LC">PMP_LC</option>
       <option value="PMP_MT">PMP_MT</option>
       <option value="PMP_PI">PMP_PI</option>
       <option value="PMP_QUALI">PMP_QUALI</option>
       <option value="PMP_TERC">PMP_TERC</option>
       <option value="PMP_EMERG">PMP_EMERG</option>

        
        
    </select>
    </div>

     <div class="form-group">
          <label for="email" >STATUS ATUAL:</label> 
       <select class="form-control" name="status">
       <option value="<?php echo $status ?>" ><?php echo $status ?> </option>
       <option value="AGUARDA APROVAÇÃO DO COMITE">AGUARDA APROVAÇÃO DO COMITE</option>
       <option value="AGUARDA INFORMACAO DE CAMPO (PSR)">AGUARDA INFORMACAO DE CAMPO (PSR)</option>
       <option value="Doc./Cadastro Aceito - Aceitacao de campo">Doc./Cadastro Aceito - Aceitação de campo</option>
       <option value="Doc./Cadastro Entregue">Doc./Cadastro Entregue</option>
       <option value="Doc./Cadastro Rejeitado">Doc./Cadastro Rejeitado</option>
       <option value="Em contratacao">Em contratação</option>
       <option value="Em Execucao">Em Execucao</option>
       <option value="Necessita revisao O&M">Necessita revisao O&M</option>
       <option value="Orcamento concluido">Orcamento concluido</option>
       <option value="Orcamento Reprovado">Orçamento Reprovado</option>
       <option value="Reprovado pelo Comite">Reprovado pelo Comitê</option>
       <option value="Servico Cancelado">Serviço Cancelado</option>

           <option value="Servico Encerrado">Serviço Encerrado</option>
       <option value="Servico Liberado para Execucao">Serviço Liberado para Execução</option>
       <option value="Servico Liberado para Orcamento">Serviço Liberado para Oramento</option>
       <option value="Servico Migrado para outra DC">Serviço Migrado para outra DC</option>
       

        
        
    </select>
    </div>

  <div class="form-group">

      <label for="email">RESPONSAVEL:</label>  
      <input type="text" class="form-control" value="<?php echo $responsavel ?>" id="responsavel" name="responsavel"  required>

      </div>

     

  
 
   

 
   
     <br><br><button type="submit" value="Editarr" class="btn btn-warning" id="submit" required > <strong>Editar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>

 </div>




</body>
</html>


<script>
  
$(function() {

/*var  availableTags = [

"ajskkdp",
"iiisosoa",
"ooiismsm",
"aassdddd",
"ooedmmmd",
"iisoosoos"
];

$( "#cabo" ).autocomplete({
  source: availableTags

  });
*/

$.getJSON("listar_cabos.php", function(data){
//console.log(data);
var retorno = [];


$(data).each( function (key, value){

 // console.log(value.cabo);

 retorno.push(value.cabo);


});
$("#cabo").autocomplete({
  source: retorno ,

 

  });




  });
});






</script>

<!--
<script>
  
$(function() {



$.getJSON("listar_cabos.php", function(data2){
//console.log(data);
var retorno2 = [];


$(data2).each( function (key2, value2){

 // console.log(value.cabo);

 retorno2.push(value2.trecho);


});
$("#localidade").autocomplete({
  source: retorno2

  });




  });
});






</script>
-->