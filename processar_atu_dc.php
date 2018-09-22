

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

<script language="javascript">
function noenter() {
var tecla = event.keyCode;
if ((tecla == 13)) {
return false;
}
return tecla;
}
</script>



<script type="text/javascript">
function completar_campos(){
document.getElementById("loading").style.display = "block";
var con_consulta;
if (window.XMLHttpRequest){

con_consulta = new XMLHttpRequest();

}else{


con_consulta  = new ActiveXObject("Microsoft.XMLHTTP");



}

con_consulta.onreadystatechange = function(){

if(con_consulta.readyState ==  4 && con_consulta.status == 200){

document.getElementById("form").innerHTML = con_consulta.responseText;
document.getElementById("loading").style.display = "none";

}

}

var equipe = document.getElementById("dc").value;

con_consulta.open("GET","processar_atu_dc.php?dc="+dc,true);
con_consulta.send(null);






}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function fnExcelReport() {
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

    tab_text = tab_text + '<x:Name>Relatorio Caixa Fechada</x:Name>';

    tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
    tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

    tab_text = tab_text + "<table border='1px'>";
    tab_text = tab_text + $('#myTable').html();
    tab_text = tab_text + '</table></body></html>';

    var data_type = 'data:application/vnd.ms-excel';
    
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        if (window.navigator.msSaveBlob) {
            var blob = new Blob([tab_text], {
                type: "application/csv;charset=utf-8;"
            });
            navigator.msSaveBlob(blob, 'Test file.xls');
        }
    } else {
        $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#test').attr('download', 'relatorio.xls');
    }

}





</script>





<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='adm.php'",3000);
  
  
}



</script>

<!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->

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

  <link rel="icon" href="img/key.png">
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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

$dc = $_GET['dc'];
$seleciona_dados = mysql_query("select * from dc where dc = '".$_GET['dc']."'");
$linha_recupera_dados = mysql_num_rows($seleciona_dados);
$lin_dado_cli = mysql_fetch_array($seleciona_dados);
if($linha_recupera_dados == 0 ){ 




echo '
<div id="form">
     <div class="form-group">
          <label for="email" >UF:</label> 
       <select class="form-control" name="uf">
       <option value="'.$lin_dado_cli['uf'].'" > '.$lin_dado_cli['uf'].' </option>
       <option value="PR">PR</option>
       <option value="SC">SC</option>
        
        
    </select>
    </div> 

  <div class="form-group">  
    <label for="email" >SIGLA DA LOCALIDADE:</label> <br>
    <select class="form-control"  name="sigla_local">
       <option value="0" disabled="disabled">Escolha uma estação</option>

        <?php
     
          
         $sql = "SELECT * FROM localidades order by sigla_local";
         $qr = mysql_query($sql) or die(mysql_error());
         while($ln = mysql_fetch_assoc($qr)){
            echo "<option value='.$ln['sigla_local'].'">'.$ln['sigla_local'].'</option>";
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
    </div>



        <label for="email">CÓDIGO INEXISTENTE.!!:</label>  


     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  
';
}


else 
{

echo '

    <div id="form">
     <div class="form-group">
          <label for="email" >UF:</label> 
       <select class="form-control" name="uf">
         <option value="'.$lin_dado_cli['uf'].'" > '.$lin_dado_cli['uf'].' </option>
       <option value="PR">PR</option>
       <option value="SC">SC</option>
        
        
    </select>
    </div> 

  <div class="form-group">  
    <label for="email" >SIGLA DA LOCALIDADE:</label> <br>
    <select class="form-control"  name="sigla_local">
        <option value="'.$lin_dado_cli['sigla'].'" > '.$lin_dado_cli['sigla'].' </option>

        <?php
     
          
         $sql = "SELECT * FROM localidades order by sigla_local";
         $qr = mysql_query($sql) or die(mysql_error());
         while($ln = mysql_fetch_assoc($qr)){
            echo "<option value='.$ln['sigla_local'].'">'.$ln['sigla_local'].'</option>";
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
    </div>

    


    







     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  
  
 

';
}

 