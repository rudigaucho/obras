<?php include "coon.php"; 


session_start();
if($_SESSION["senha"] != '1' )
{
  header("Location: index.php");
  exit;
  }


?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
       
      $(document).ready(function(){
          
         $("select[name=sigla_local]").change(function(){
            $("select[name=localidade]").html('<option value="0">Carregando...</option>');
             
            $.post("localidades_2.php",
                  {sigla_local:$(this).val()},
                  function(valor){
                     $("select[name=localidade]").html(valor);
                  }
                  )
             
         })
            })
       
</script>




<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='cad_equipe.php'",3000);
  
  
}



</script>



  <link rel="icon" href="img/key.png">
  <title>CADASTRO DC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#"> <?php echo $_SESSION["nome"]?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
              
         
           
      

        
      <li class="active"><a href="adm.php">Voltar</a></li>

                </ul>
            </div>

        </div>
    </div>

    <div class="container">
 <span><strong>DC</strong></span>
  <ul class="nav nav-tabs">
    
    <li class="active"> <a href="#">CADASTRO</a></li>
    <li > <a href="edit_dc.php">ATUALIZAÇÃO</a></li>
     <li > <a href="#">DELETAR</a></li>
 


  </ul>
  <br>
  <form class="form" role="form" name="seachform" method="post" action="enviar_cad_dc.php " >

   

      <div class="form-group">
          <label for="email" >UF:</label> 
       <select class="form-control" name="uf">
       <option value="PR">PR</option>
       <option value="SC">SC</option>
        
        
    </select>
    </div> 


 <div class="form-group">

      <label for="email">DC:</label>  
      <input type="text" class="form-control" id="dc" name="dc"  required>

      </div> 

      <div class="form-group">  
    <label for="email" >SIGLA DA LOCALIDADE:</label> <br>
    <select class="form-control"  name="sigla_local">
       <option value="0" disabled="disabled">Escolha uma estação</option>

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
    <select  name="localidade">
       <option value="0" disabled="disabled">Escolha uma localidade</option>
    </select>
        </div>

     <div class="form-group">




      <label for="email">TIPO DE PROJETO:</label>  
      <input type="text" class="form-control" id="projeto" name="projeto"  required>
    </div>


      <div class="form-group">
          <label for="email" >FILTRO:</label> 
       <select class="form-control" name="filtro">
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
      <input type="text" class="form-control" id="responsavel" name="responsavel"  required>

      </div>

      <label  for="data">
       Data
      </label>
    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 
  <div class="row">
  
    
     <div class="form-group ">
      
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" placeholder="DD/MM/AAAA" type="text"/>
       </div>
      </div>
     </div>
    
  
   
  </div>

</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
 $(document).ready(function(){
  var date_input=$('input[name="date"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'dd/mm/yyyy',
   container: container,
   todayHighlight: true,
   autoclose: true,
  })
 })
</script>
 
 




      
      

    



         
  





   
    
   
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Enviar</strong> </button><br><br><br><br>


   </div>
     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  
</div>




</body>
</html>

