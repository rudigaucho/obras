

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

var equipe = document.getElementById("equipe").value;

con_consulta.open("GET","processar_atu_equipe.php?equipe="+equipe,true);
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

$equipe = $_GET['equipe'];
$seleciona_dados = mysql_query("select * from equipe where matricula = '".$_GET['equipe']."'");
$linha_recupera_dados = mysql_num_rows($seleciona_dados);
$lin_dado_cli = mysql_fetch_array($seleciona_dados);
if($linha_recupera_dados == 0 ){ 

echo '
<div id="form">
  <div>
      <label for="email">UF:</label>  
      <input type="text" class="form-control" id="uf" name="uf"  required>
    </div>
<label for="email" >STATUS:</label> 
  <select  class="form-control" id="status" name="status" ">
       <option value="0"></option>
           
           <option value="ATIVA">ATIVA</option>
           <option value="BLOQUEADA">BLOQUEADA</option>
       
        
    </select>
    <div>
      <div>
      <label for="email">RESPONSÁVEL:</label>  
      <input type="text" class="form-control" id="resp" name="resp"   required>
    </div>
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
  <div>
      <label for="email">UF:</label>  
      <input type="text" class="form-control" id="uf" name="uf"  value="'.$lin_dado_cli['uf'].'" required>
    </div>
 <label for="email" >STATUS:</label> 
  <select  class="form-control" id="status" name="status" ">
       <option value="0"></option>
           
           <option value="ATIVA">ATIVA</option>
           <option value="BLOQUEADA">BLOQUEADA</option>
       
        
    </select>
      <div>
      <label for="email">RESPONSÁVEL:</label>  
      <input type="text" class="form-control" id="resp" name="resp"  value="'.$lin_dado_cli['responsavel'].'" required>
    </div>
      </div>
          </div>
    


    







     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  
  
 

';
}

 