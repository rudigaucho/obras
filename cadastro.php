

<?php include "coon.php"; 


/*session_start();
if($_SESSION["senha"] != '1' )
{
  header("Location: index.php");
  exit;
  
  
}*/




?>



<!DOCTYPE html>



<html lang="pt-br">
<head>

<script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('input[type=radio]').change(function() {
        if (this.value == 'mt20' || this.value == 'pc' || this.value == 'pl' || this.value == 'ml' || this.value == 'mc') {
            $("#tb1").css("display","block");
            $("#tb2").css("display","block");
         
        }
        else if (this.value == 'mt10') {
            $("#tb1").css("display","block");
            $("#tb2").css("display","none");
         
        }
         else if (this.value == 'pp' || this.value == 'mp' ) {
            $("#tb1").css("display","none");
            $("#tb2").css("display","none");
         
        }
    });
});

</script>

<script type="text/javascript">
       
      $(document).ready(function(){
          
         $("select[name=ddd]").change(function(){
            $("select[name=estacao]").html('<option value="0">Carregando...</option>');
             
            $.post("localidades.php",
                  {ddd:$(this).val()},
                  function(valor){
                     $("select[name=estacao]").html(valor);
                  }
                  )
             
         })



         $("select[name=estacao]").change(function(){
            $("select[name=localidade]").html('<option value="0">Carregando...</option>');
            $.post("sigla.php",
                  {estacao:$(this).val()},
                    function(valor){
                      $("select[name=localidade]").html(valor);
                  }
                  )
          })




         $("select[name=localidade]").change(function(){
            $("select[name=dc]").html('<option value="0">Carregando...</option>');
            $.post("dc.php",
                  {localidade:$(this).val()},
                    function(valor){
                      $("select[name=dc]").html(valor);
                  }
                  )
          })
      })
       
</script>







 <style>

 .none{
    display:none;
}



label.error {
    color: red;
    font-size: 10px;
    font-family: arial;      
}


     #jumbo{
  background: url(empresa.jpg) no-repeat;

}
  </style>
<link rel="icon" href="logo.png">






<!--   FIM FUNCAO                            -->







  <meta charset="utf-8">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

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
  <title>CADASTRO OBRAS.</title>
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

<div class="jumbotron text-center " id="jumbo">
  <br><br><br><br><br><br><br>
</div>


  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
       
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Voltar</a></li>
        
       


 
      
 
    
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>

<span><strong>CADASTRO OBRAS</strong></span><br><br><br><br>

<div class="container">


<div class="row content">


    <div class="col-sm-10 "  >

    
  
  <form class="form" role="form" name="seachform" method="post" action="enviar.php " enctype="multipart/form-data" >

   

    
        <div class="form-group">  
    <label for="email" >DDD:</label> <br>
    <select class="form-control"  name="ddd">
       <option value="0" disabled="disabled">Escolha um ddd</option>

        <?php
     
          
         $sql = "SELECT * FROM localidades group by ddd";
         $qr = mysql_query($sql) or die(mysql_error());
         while($ln = mysql_fetch_assoc($qr)){
            echo '<option value="'.$ln['ddd'].'">'.$ln['ddd'].'</option>';
         }
      ?>
    </select>
        </div>  

        <div class="form-group">  
    <label for="email" >ESTAÇÃO:</label> <br>
    <select  name="estacao">
       <option value="0" disabled="disabled">Escolha uma Estação</option>
    </select>
        </div>

   
    <div class="form-group">
          <label for="email" >LOCALIDADE:</label> 
       <select class="form-control" name="localidade">
       <option value="0">Escolha uma localidade</option>
        
        
    </select>
    </div>

   <div class="form-group">
          <label for="email" >DC:</label> 
       <select class="form-control" name="dc">
       <option value="0">Escolha uma DC</option>
        
        
    </select>
    </div> 
    
      <div class="form-group">
    
      <input type="hidden" class="form-control" id="tec" name="tec" >
    </div>
      <div class="form-group">
       <label for="email" >EQUIPE:</label> 
       <select  class="form-control" name="equipe">
       <option value="0">Escolha uma localidade</option>
        <?php
     
          
         $sql = "SELECT * FROM equipe ORDER BY matricula ASC";
         $qr = mysql_query($sql) or die(mysql_error());
         while($ln = mysql_fetch_assoc($qr)){
            echo '<option value="'.$ln['matricula'].'">'.$ln['matricula'].'</option>';
         }
      ?>
        
    </select>
    </div>
    <div class="form-group">
       <label for="email">GESTOR DA OBRA:</label>  
      <input type="text" class="form-control" id="gestor" name="gestor"  required>
    </div>
   


         


   <div class="form-group">
       <label for="email">ENDEREÇO:</label>  
      <input type="text" class="form-control" id="endereco" name="endereco"  required>
    </div>
     <div class="form-group">
       <label for="email">PONTO DE REFERÊNCIA:</label>  
      <input type="text" class="form-control" id="ref" name="ref"  required>
    </div>
     <div class="form-group">
       <label for="email">Nº DA FOTO:</label>  
      <input type="text" class="form-control" id="n_foto" name="n_foto"  required>
    </div>
 <div class="form-group">
       <label for="email">Nº DA CAIXA:</label>  
      <input type="text" class="form-control" id="n_cx" name="n_cx"  required>
    </div>

     <div class="form-group">
       <label for="email">ARD:</label>  
      <input type="text" class="form-control" id="ard" name="ard"  required>
    </div>
   
  <label for="email">TIPO POSTE: </label><br>






<label class="radio-inline"><input type="radio" name="optradio" value="mt10">mt10</label>
<label class="radio-inline"><input type="radio" name="optradio" value="mt20" >mt20</label>
<label class="radio-inline"><input type="radio" name="optradio" value="pp">pp</label>

<label class="radio-inline"><input type="radio" name="optradio" value="mp">mp</label>
<label class="radio-inline"><input type="radio" name="optradio" value="pc">pc</label>
<label class="radio-inline"><input type="radio" name="optradio" value="pl">pl</label>
<label class="radio-inline"><input type="radio" name="optradio" value="mc">mc</label>
<label class="radio-inline"><input type="radio" name="optradio" value="ml">ml</label>




    <br><br>


        <div class="form-group">
    <label for="email">OBS: </label>
  <textarea class="form-control" rows="5" id="obs" name="obs" placeholder="Máximo 300 caracteres" maxlength="300"></textarea>
    </div>

   
 
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
        <td> <input type="text" class="form-control" id="tel1" name="tel1"  required></td>
        <td> <input type="text" class="form-control" id="cabo1" name="cabo1"  required></td>
        <td> <input type="text" class="form-control" id="pri1" name="pri1"  required></td>
        <td> <input type="text" class="form-control" id="ard1" name="ard1"  required></td>
        <td> <input type="text" class="form-control" id="sec1" name="sec1"  required></td>
        <td> <input type="text" class="form-control" id="cx1" name="cx1"  required></td>
        
        
      </tr>
      <tr>
        <td>2</td>
         <td> <input type="text" class="form-control" id="tel2" name="tel2"  required></td>
        <td> <input type="text" class="form-control" id="cabo2" name="cabo2"  required></td>
        <td> <input type="text" class="form-control" id="pri2" name="pri2"  required></td>
        <td> <input type="text" class="form-control" id="ard2" name="ard2"  required></td>
        <td> <input type="text" class="form-control" id="sec2" name="sec2"  required></td>
        <td> <input type="text" class="form-control" id="cx2" name="cx2"  required></td>
    
      </tr>
      <tr>
         <td>3</td>
        <td> <input type="text" class="form-control" id="tel3" name="tel3"  required></td>
        <td> <input type="text" class="form-control" id="cabo3" name="cabo3"  required></td>
        <td> <input type="text" class="form-control" id="pri3" name="pri3"  required></td>
        <td> <input type="text" class="form-control" id="ard3" name="ard3"  required></td>
        <td> <input type="text" class="form-control" id="sec3" name="sec3"  required></td>
        <td> <input type="text" class="form-control" id="cx3" name="cx3"  required></td>
       
     
      </tr>
      <tr>
         <td>4</td>
         <td> <input type="text" class="form-control" id="tel4" name="tel4"  required></td>
        <td> <input type="text" class="form-control" id="cabo4" name="cabo4"  required></td>
        <td> <input type="text" class="form-control" id="pri4" name="pri4"  required></td>
        <td> <input type="text" class="form-control" id="ard4" name="ard4"  required></td>
        <td> <input type="text" class="form-control" id="sec4" name="sec4"  required></td>
        <td> <input type="text" class="form-control" id="cx4" name="cx4"  required></td>
       
     
      </tr>
      <tr>
         <td>5</td>
       <td> <input type="text" class="form-control" id="tel5" name="tel5"  required></td>
        <td> <input type="text" class="form-control" id="cabo5" name="cabo5"  required></td>
        <td> <input type="text" class="form-control" id="pri5" name="pri5"  required></td>
        <td> <input type="text" class="form-control" id="ard5" name="ard5"  required></td>
        <td> <input type="text" class="form-control" id="sec5" name="sec5"  required></td>
        <td> <input type="text" class="form-control" id="cx5" name="cx5"  required></td>
       
     
      </tr>
      <tr>
         <td>6</td>
       <td> <input type="text" class="form-control" id="tel6" name="tel6"  required></td>
        <td> <input type="text" class="form-control" id="cabo6" name="cabo6"  required></td>
        <td> <input type="text" class="form-control" id="pri6" name="pri6"  required></td>
        <td> <input type="text" class="form-control" id="ard6" name="ard6"  required></td>
        <td> <input type="text" class="form-control" id="sec6" name="sec6"  required></td>
        <td> <input type="text" class="form-control" id="cx6" name="cx6"  required></td>
       
     
      </tr>
      <tr>
         <td>7</td>
    <td> <input type="text" class="form-control" id="tel7" name="tel7"  required></td>
        <td> <input type="text" class="form-control" id="cabo7" name="cabo7"  required></td>
        <td> <input type="text" class="form-control" id="pri7" name="pri7"  required></td>
        <td> <input type="text" class="form-control" id="ard7" name="ard7"  required></td>
        <td> <input type="text" class="form-control" id="sec7" name="sec7"  required></td>
        <td> <input type="text" class="form-control" id="cx7" name="cx7"  required></td>
     
      </tr>
      <tr>
         <td>8</td>
    <td> <input type="text" class="form-control" id="tel8" name="tel8"  required></td>
        <td> <input type="text" class="form-control" id="cabo8" name="cabo8"  required></td>
        <td> <input type="text" class="form-control" id="pri8" name="pri8"  required></td>
        <td> <input type="text" class="form-control" id="ard8" name="ard8"  required></td>
        <td> <input type="text" class="form-control" id="sec8" name="sec8"  required></td>
        <td> <input type="text" class="form-control" id="cx8" name="cx8"  required></td8>
       
     
      </tr>
      <tr>
         <td>9</td>
         <td> <input type="text" class="form-control" id="tel9" name="tel9"  required></td>
        <td> <input type="text" class="form-control" id="cabo9" name="cabo9"  required></td>
        <td> <input type="text" class="form-control" id="pri9" name="pri9"  required></td>
        <td> <input type="text" class="form-control" id="ard9" name="ard9"  required></td>
        <td> <input type="text" class="form-control" id="sec9" name="sec9"  required></td>
        <td> <input type="text" class="form-control" id="cx9" name="cx9"  required></td>
       
     
      </tr>
      <tr>
         <td>10</td>
         <td> <input type="text" class="form-control" id="tel10" name="tel10"  required></td>
        <td> <input type="text" class="form-control" id="cabo10" name="cabo10"  required></td>
        <td> <input type="text" class="form-control" id="pri10" name="pri10"  required></td>
        <td> <input type="text" class="form-control" id="ard10" name="ard10"  required></td>
        <td> <input type="text" class="form-control" id="sec10" name="sec10"  required></td>
        <td> <input type="text" class="form-control" id="cx10" name="cx10"  required></td>
     
      </tr>
    </tbody>




    
  </table>






  <table  class="table table-bordered"  id="tb2" name="tb2"  >

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
          <td> <input type="text" class="form-control" id="tel11" name="tel11"  ></td>
          <td> <input type="text" class="form-control" id="cabo11" name="cabo11"  ></td>
          <td> <input type="text" class="form-control" id="pri11" name="pri11"  ></td>
          <td> <input type="text" class="form-control" id="ard11" name="ard11"  ></td>
          <td> <input type="text" class="form-control" id="sec11" name="sec11"  ></td>
          <td> <input type="text" class="form-control" id="cx11" name="cx11"  ></td>
          
          
        </tr>
        <tr>
          <td>2</td>
           <td> <input type="text" class="form-control" id="tel12" name="tel12"  ></td>
          <td> <input type="text" class="form-control" id="cabo12" name="cabo12"  ></td>
          <td> <input type="text" class="form-control" id="pri12" name="pri12"  ></td>
          <td> <input type="text" class="form-control" id="ard12" name="ard12"  ></td>
          <td> <input type="text" class="form-control" id="sec12" name="sec12"  ></td>
          <td> <input type="text" class="form-control" id="cx12" name="cx12"  ></td>
      
        </tr>
        <tr>
           <td>3</td>
          <td> <input type="text" class="form-control" id="tel13" name="tel13"  ></td>
          <td> <input type="text" class="form-control" id="cabo13" name="cabo13"  ></td>
          <td> <input type="text" class="form-control" id="pri13" name="pri13"  ></td>
          <td> <input type="text" class="form-control" id="ard13" name="ard13"  ></td>
          <td> <input type="text" class="form-control" id="sec13" name="sec13"  ></td>
          <td> <input type="text" class="form-control" id="cx13" name="cx13"  ></td>
         
       
        </tr>
        <tr>
           <td>4</td>
           <td> <input type="text" class="form-control" id="tel14" name="tel14"  ></td>
          <td> <input type="text" class="form-control" id="cabo14" name="cabo14"  ></td>
          <td> <input type="text" class="form-control" id="pri14" name="pri14"  ></td>
          <td> <input type="text" class="form-control" id="ard14" name="ard14"  ></td>
          <td> <input type="text" class="form-control" id="sec14" name="sec14"  ></td>
          <td> <input type="text" class="form-control" id="cx14" name="cx14"  ></td>
         
       
        </tr>
        <tr>
           <td>5</td>
         <td> <input type="text" class="form-control" id="tel15" name="tel15"  ></td>
          <td> <input type="text" class="form-control" id="cabo15" name="cabo15"  ></td>
          <td> <input type="text" class="form-control" id="pri15" name="pri15"  ></td>
          <td> <input type="text" class="form-control" id="ard15" name="ard15"  ></td>
          <td> <input type="text" class="form-control" id="sec15" name="sec15"  ></td>
          <td> <input type="text" class="form-control" id="cx15" name="cx15"  ></td>
         
       
        </tr>
        <tr>
           <td>6</td>
         <td> <input type="text" class="form-control" id="tel16" name="tel16"  ></td>
          <td> <input type="text" class="form-control" id="cabo16" name="cabo16"  ></td>
          <td> <input type="text" class="form-control" id="pri16" name="pri16"  ></td>
          <td> <input type="text" class="form-control" id="ard16" name="ard16"  ></td>
          <td> <input type="text" class="form-control" id="sec16" name="sec16"  ></td>
          <td> <input type="text" class="form-control" id="cx16" name="cx16"  ></td>
         
       
        </tr>
        <tr>
           <td>7</td>
      <td> <input type="text" class="form-control" id="tel17" name="tel17"  ></td>
          <td> <input type="text" class="form-control" id="cabo17" name="cabo17"  ></td>
          <td> <input type="text" class="form-control" id="pri17" name="pri17"  ></td>
          <td> <input type="text" class="form-control" id="ard17" name="ard17"  ></td>
          <td> <input type="text" class="form-control" id="sec17" name="sec17"  ></td>
          <td> <input type="text" class="form-control" id="cx17" name="cx17"  ></td>
       
        </tr>
        <tr>
           <td>8</td>
      <td> <input type="text" class="form-control" id="tel18" name="tel18"  ></td>
          <td> <input type="text" class="form-control" id="cabo18" name="cabo18"  ></td>
          <td> <input type="text" class="form-control" id="pri18" name="pri18"  ></td>
          <td> <input type="text" class="form-control" id="ard18" name="ard18"  ></td>
          <td> <input type="text" class="form-control" id="sec18" name="sec18"  ></td>
          <td> <input type="text" class="form-control" id="cx18" name="cx18"  ></td8>
         
       
        </tr>
        <tr>
           <td>9</td>
           <td> <input type="text" class="form-control" id="tel19" name="tel19"  ></td>
          <td> <input type="text" class="form-control" id="cabo19" name="cabo19"  ></td>
          <td> <input type="text" class="form-control" id="pri19" name="pri19"  ></td>
          <td> <input type="text" class="form-control" id="ard19" name="ard19"  ></td>
          <td> <input type="text" class="form-control" id="sec19" name="sec19"  ></td>
          <td> <input type="text" class="form-control" id="cx19" name="cx19"  ></td>
         
       
        </tr>
        <tr>
           <td>10</td>
           <td> <input type="text" class="form-control" id="tel20" name="tel20"  ></td>
          <td> <input type="text" class="form-control" id="cabo20" name="cabo20"  ></td>
          <td> <input type="text" class="form-control" id="pri20" name="pri20"  ></td>
          <td> <input type="text" class="form-control" id="ard20" name="ard20"  ></td>
          <td> <input type="text" class="form-control" id="sec20" name="sec20"  ></td>
          <td> <input type="text" class="form-control" id="cx20" name="cx20"  ></td>
       
        </tr>
      </tbody>




      
    </table>




<fieldset style="border: 1px solid black; padding: 8px; "> 
<span><strong>MATERIAIS USADOS:</strong></span><br><br>
 


<div class="wrapper">
    <div class="toclone">
        <select name="list[qtd][]">
            <option value="0">Escolha uma material</option>
        <?php
     
          
         $sql = "SELECT * FROM mat ORDER BY descricao ASC";
         $qr = mysql_query($sql) or die(mysql_error());
         while($ln = mysql_fetch_assoc($qr)){
            echo '<option value="'.$ln['descricao'].'">'.$ln['descricao'].'</option>';
         }
      ?>
        </select>
        <input  type="text" name="produtos[qtd][1]">
        <button type="button" class="add">+</button>
        <button type="button" class="remove">-</button>
    </div>        
</div>

<script type="text/javascript">
function adicionar(){
  var ElementoClonado = $(this.parentNode).clone(); //clona o elemento
  var str = $(ElementoClonado).children('input').eq(0).attr('name').split("["); //divide o name por "["
  console.log(str);
  var intQtd = parseInt(str[2].split("]")[0]); //resgata o numero entre "[" e "]"
  console.log(intQtd);
  var newName = "produtos[qtd]["+(intQtd+1)+"]"; //novo valor name somado +1 do original
  ElementoClonado.children('input').eq(0).attr('name', newName); //seta o novo name para o elemento clonado
  $('.wrapper').append(ElementoClonado);
  $('.add').on("click", adicionar);
  $('.remove').on("click", remover);
  $(this).unbind("click");
}
function remover(){
  $(this.parentNode).remove();
}
$('.add').on("click", adicionar);
$('.remove').on("click", remover);

</script>
   

</fieldset>  
<br><br>
<fieldset style="border: 1px solid black; padding: 8px; "> 
   <span><strong>Máximo 2MB</strong></span><br>

  
    
     <label for="email">Foto Antes: </label>
    <input type="file"  id="foto_ant"  name="foto_ant"/> 
    <label for="email">Foto Depois: </label>
    <input type="file" id="foto_dep"  name="foto_dep"/>
    <label for="email">Croqui: </label>
    <input type="file"  id="foto_croqui"  name="foto_croqui"/>
    </fieldset>
    
   
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>
 
</div>

</body>
</html>



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