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

var pt = document.getElementById("pt").value;

con_consulta.open("GET","processar_atu.php?pt="+pt,true);
con_consulta.send(null);






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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="img/logo_oi.ico">







<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='adm.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
  <title>MATERIAIS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcd/.n.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                 <a class="navbar-brand" href="#"> </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
              
         
           
      

        
      <li class="active"><a href="index.html">Voltar</a></li>

                </ul>
            </div>

        </div>
    </div>

    <div class="container">
 <span><strong>MATERIAIS</strong></span>
  <ul class="nav nav-tabs">
    
    <li > <a href="cad_mat.php">CADASTRO</a></li>
    <li class="active"> <a href="atua_mat.php">ATUALIZAÇÃO</a></li>
    <li > <a href="del_mat.php">DELETAR</a></li>
    


  </ul>
  <br>
  <form class="form" role="form" name="seachform" id="form" method="post" action="enviar_atu_mat.php " enctype="multipart/form-data" >

   

    <div class="form-group">
    <img src="loading.gif" id="loading" style="display:none; width:50px;height:50px;   " />

       <label for="email">CÓDIGO:</label>
      <input type="text" class="form-control" id="pt" name="pt" onblur="completar_campos();"   required >
    </div>
     <div class="form-group">




      <label for="email">DESCRIÇÃO:</label>  
      <input type="text" class="form-control" id="tec" name="tec"  required>
    </div>
    


    



<br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Editar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  
</div>




</body>
</html>

