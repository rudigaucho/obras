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
function loginsuccessfully()
{
  setTimeout("window.location='del_mat.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
  <title>DELETE EQUIPE</title>
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
              
         
           
      

        
      <li class="active"><a href="index.html">Voltar</a></li>

                </ul>
            </div>

        </div>
    </div>

    <div class="container">
 <span><strong>EQUIPE</strong></span>
  <ul class="nav nav-tabs">
    
    <li > <a href="cad_equipe.php">CADASTRO</a></li>
    <li > <a href="atua_equipe">ATUALIZAÇÃO</a></li>
    <li class="active"> <a href="del_equipe.php">DELETAR</a></li>


  </ul>
  <br>
  <form class="form" role="form" name="seachform" method="post" action="enviar_del_equipe.php " >

   

    <div class="form-group">

       <label for="email" >EQUIPE:</label> 
       <select  class="form-control" id="equipe" name="equipe" onblur="completar_campos();">
     
        <?php
     
          
         $sql = "SELECT * FROM equipe ORDER BY matricula ASC";
         $qr = mysql_query($sql) or die(mysql_error());
         while($ln = mysql_fetch_assoc($qr)){
            echo '<option value="'.$ln['matricula'].'">'.$ln['matricula'].'</option>';
         }
      ?>
        
    </select>
    </div>
     
   
    
   
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Deletar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  
</div>




</body>
</html>

