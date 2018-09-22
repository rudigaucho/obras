



<?php
 include "coon.php"; 
//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {




?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">




<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

 <title>CADASTRO </title>


</head>



<body>


<?php


$permite = array('image/jpg', 'image/jpeg' , 'image/png');
    $type =$_FILES['foto_ant'] ['type'];
    $type2 =$_FILES['foto_dep'] ['type'];
     $type3 =$_FILES['foto_croqui'] ['type'];
    
       

//  ------------------------------------------ VERIFICACAO TAMANHO FOTOS ------------------------------------------------------- 


            $tamanho1 =$_FILES['foto_ant']['size'];
            $tamanho2 =$_FILES['foto_dep']['size'];
            $tamanho3 =$_FILES['foto_croqui']['size'];

           



// ------------------------------------------------------------- verificar vazios---

            if (empty($type))
            {

               $type = 'image/png';



            }

             if (empty($type2))
            {

               $type2 = 'image/png';



            }
             if(empty($_FILES['foto_croqui'] ['type']))
            {

               $type3 = 'image/png';



            }
           
             

//-----------------------------------------------------------------------------------









  $extensao = strtolower(substr($_FILES['foto_ant'] ['name'], -4));
  $novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "fotos/";








$extensao2 = strtolower(substr($_FILES['foto_dep'] ['name'], -4));
  $novo_nome2  = md5(mt_rand(1, 1000) . microtime()). $extensao2;
    $diretorio = "fotos/";




  

$extensao3 = strtolower(substr($_FILES['foto_croqui'] ['name'], -4));
  $novo_nome3  = md5(mt_rand(1, 1000) . microtime()). $extensao3;
    $diretorio = "fotos/";



















if (!in_array($type,$permite) || !in_array($type2,$permite ) || !in_array($type3,$permite ) )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
  echo "<script>saidasuccessfully()</script>";
}


else if ( ($tamanho1 > 2000000) || ($tamanho2 > 2000000) || ($tamanho3 > 2000000)   )
{

echo "TAMANHO MÁXIMO DA IMAGEM 2MB!";
  echo "<script>saidasuccessfully()</script>";
}
else

move_uploaded_file ($_FILES['foto_ant'] ['tmp_name'], $diretorio.$novo_nome )  ;
move_uploaded_file ($_FILES['foto_dep'] ['tmp_name'], $diretorio.$novo_nome2 ) ;
move_uploaded_file ($_FILES['foto_croqui'] ['tmp_name'], $diretorio.$novo_nome3 )   ;


  

  





$protocolo = (mt_rand(1,101020000) ) ;

    $n_obra =$_POST['n_obra'];
  $localidade =$_POST['localidade'];
$estacao =$_POST['estacao'];
$tec =$_POST['tec'];
$equipe =$_POST['equipe'];
$gestor =$_POST['gestor'];
$endereco =$_POST['endereco'];
$ref =$_POST['ref'];
$n_foto =$_POST['n_foto'];
$optradio =$_POST['optradio'];
$obs =$_POST['obs'];
$ddd =$_POST['ddd'];
$uf =$_POST['uf'];
$n_cx =$_POST['n_cx'];
$n_foto =$_POST['n_foto'];
$obs =$_POST['obs'];
$ard =$_POST['ard'];




if($optradio  == 'pp' or  $optradio  == 'pc' or $optradio  == 'pl')
{

$tipo_atv = 'TROCA';

}
else
{

$tipo_atv = 'MANUTENCAO';

}

$chave = $ddd."_".$uf."_".$estacao."_".$ard."_".$n_cx."#".$tipo_atv."-".$endereco."@".$equipe."@";



$tel1 =$_POST['tel1'];
$tel2 =$_POST['tel2'];
$tel3 =$_POST['tel3'];
$tel4 =$_POST['tel4'];
$tel5 =$_POST['tel5'];
$tel6 =$_POST['tel6'];
$tel7 =$_POST['tel7'];
$tel8 =$_POST['tel8'];
$tel9 =$_POST['tel9'];
$tel10 =$_POST['tel10'];
$tel11 =$_POST['tel11'];
$tel12 =$_POST['tel12'];
$tel13 =$_POST['tel13'];
$tel14 =$_POST['tel14'];
$tel15 =$_POST['tel15'];
$tel16 =$_POST['tel16'];
$tel17 =$_POST['tel17'];
$tel18 =$_POST['tel18'];
$tel19 =$_POST['tel19'];
$tel20 =$_POST['tel20'];

$cabo1 =$_POST['cabo1'];
$cabo2 =$_POST['cabo2'];
$cabo3 =$_POST['cabo3'];
$cabo4 =$_POST['cabo4'];
$cabo5 =$_POST['cabo5'];
$cabo6 =$_POST['cabo6'];
$cabo7 =$_POST['cabo7'];
$cabo8 =$_POST['cabo8'];
$cabo9 =$_POST['cabo9'];
$cabo10 =$_POST['cabo10'];
$cabo11 =$_POST['cabo11'];
$cabo12 =$_POST['cabo12'];
$cabo13 =$_POST['cabo13'];
$cabo14 =$_POST['cabo14'];
$cabo15 =$_POST['cabo15'];
$cabo16 =$_POST['cabo16'];
$cabo17 =$_POST['cabo17'];
$cabo18 =$_POST['cabo18'];
$cabo19 =$_POST['cabo19'];
$cabo20 =$_POST['cabo20'];

$pri1 =$_POST['pri1'];
$pri2 =$_POST['pri2'];
$pri3 =$_POST['pri3'];
$pri4 =$_POST['pri4'];
$pri5 =$_POST['pri5'];
$pri6 =$_POST['pri6'];
$pri7 =$_POST['pri7'];
$pri8 =$_POST['pri8'];
$pri9 =$_POST['pri9'];
$pri10 =$_POST['pri10'];
$pri11 =$_POST['pri11'];
$pri12 =$_POST['pri12'];
$pri13 =$_POST['pri13'];
$pri14 =$_POST['pri14'];
$pri15 =$_POST['pri15'];
$pri16 =$_POST['pri16'];
$pri17 =$_POST['pri17'];
$pri18 =$_POST['pri18'];
$pri19 =$_POST['pri19'];
$pri20 =$_POST['pri20'];

$ard1 =$_POST['ard1'];
$ard2 =$_POST['ard2'];
$ard3 =$_POST['ard3'];
$ard4 =$_POST['ard4'];
$ard5 =$_POST['ard5'];
$ard6 =$_POST['ard6'];
$ard7 =$_POST['ard7'];
$ard8 =$_POST['ard8'];
$ard9 =$_POST['ard9'];
$ard10 =$_POST['ard10'];
$ard11 =$_POST['ard11'];
$ard12 =$_POST['ard12'];
$ard13 =$_POST['ard13'];
$ard14 =$_POST['ard14'];
$ard15 =$_POST['ard15'];
$ard16 =$_POST['ard16'];
$ard17 =$_POST['ard17'];
$ard18 =$_POST['ard18'];
$ard19 =$_POST['ard19'];
$ard20 =$_POST['ard20'];

$sec1 =$_POST['sec1'];
$sec2 =$_POST['sec2'];
$sec3 =$_POST['sec3'];
$sec4 =$_POST['sec4'];
$sec5 =$_POST['sec5'];
$sec6 =$_POST['sec6'];
$sec7 =$_POST['sec7'];
$sec8 =$_POST['sec8'];
$sec9 =$_POST['sec9'];
$sec10 =$_POST['sec10'];
$sec11 =$_POST['sec11'];
$sec12 =$_POST['sec12'];
$sec13 =$_POST['sec13'];
$sec14 =$_POST['sec14'];
$sec15 =$_POST['sec15'];
$sec16 =$_POST['sec16'];
$sec17 =$_POST['sec17'];
$sec18 =$_POST['sec18'];
$sec19 =$_POST['sec19'];
$sec20 =$_POST['sec20'];

$cx1 =$_POST['cx1'];
$cx2 =$_POST['cx2'];
$cx3 =$_POST['cx3'];
$cx4 =$_POST['cx4'];
$cx5 =$_POST['cx5'];
$cx6 =$_POST['cx6'];
$cx7 =$_POST['cx7'];
$cx8 =$_POST['cx8'];
$cx9 =$_POST['cx9'];
$cx10 =$_POST['cx10'];
$cx11 =$_POST['cx11'];
$cx12 =$_POST['cx12'];
$cx13 =$_POST['cx13'];
$cx14 =$_POST['cx14'];
$cx15 =$_POST['cx15'];
$cx16 =$_POST['cx16'];
$cx17 =$_POST['cx17'];
$cx18 =$_POST['cx18'];
$cx19 =$_POST['cx19'];
$cx20 =$_POST['cx20'];


$values_gender = $_POST["produtos"]['qtd'];
$values_gender2 = $_POST["list"]['qtd'];












$query2 = "insert into principal (protocolo,numero_obra,ddd,uf,estacao,localidade,tecnico,equipe,gestor,data,endereco,ponto_ref,tipo_ard,tipo_atv,n_caixa,chave,foto_antes,foto_depois,croqui,n_foto,obs,ard)";

$query2.= "values ('$protocolo','$n_obra','$ddd','$uf','$estacao','$localidade','$tec','$equipe','$gestor',NOW(),'$endereco','$ref','$optradio','$tipo_atv','$n_cx','$chave','$novo_nome','$novo_nome2','$novo_nome3','$n_foto','$obs','$ard')";












  





                   foreach ($values_gender as $values){

                     $string[] =  $values;

                  }

$i = 0;

                foreach ($values_gender2 as $values2){

                    //echo $values; echo '<br>';

             

                    $query1 = "insert into materiais (id_prot,cod_descricao,qtd)";

                    $query1.= "values ('$protocolo','$values2','$string[$i]')";

                    ++$i;

$sql1 = mysql_query($query1);

                 }   


$query3 = "insert into bin_cx (id_prot,par,tel,cabo,pri,ard,sec,cx)";



$query3.= "values ('$protocolo','1','$tel1','$cabo1','$pri1','$ard1','$sec1','$cx1'), 

 

('$protocolo','2','$tel2','$cabo2','$pri2','$ard2','$sec2','$cx2'), 

('$protocolo','3','$tel3','$cabo3','$pri3','$ard3','$sec3','$cx3'),

('$protocolo','4','$tel4','$cabo4','$pri4','$ard4','$sec4','$cx4'), 

('$protocolo','5','$tel5','$cabo5','$pri5','$ard5','$sec5','$cx5'), 

('$protocolo','6','$tel6','$cabo6','$pri6','$ard6','$sec6','$cx6'), 

('$protocolo','7','$tel7','$cabo7','$pri7','$ard7','$sec7','$cx7'), 

('$protocolo','8','$tel8','$cabo8','$pri8','$ard8','$sec8','$cx8'), 

('$protocolo','9','$tel9','$cabo9','$pri9','$ard9','$sec9','$cx9'), 

('$protocolo','10','$tel10','$cabo10','$pri10','$ard10','$sec10','$cx10'), 

('$protocolo','11','$tel11','$cabo11','$pri11','$ard11','$sec11','$cx11'), 

('$protocolo','12','$tel12','$cabo12','$pri12','$ard12','$sec12','$cx12'), 

('$protocolo','13','$tel13','$cabo13','$pri13','$ard13','$sec13','$cx13'),

('$protocolo','14','$tel14','$cabo14','$pri14','$ard14','$sec14','$cx14'), 

('$protocolo','15','$tel15','$cabo15','$pri15','$ard15','$sec15','$cx15'), 

('$protocolo','16','$tel16','$cabo16','$pri16','$ard16','$sec16','$cx16'), 

('$protocolo','17','$tel17','$cabo17','$pri17','$ard17','$sec17','$cx17'), 

('$protocolo','18','$tel18','$cabo18','$pri18','$ard18','$sec18','$cx18'), 

('$protocolo','19','$tel19','$cabo19','$pri19','$ard19','$sec19','$cx19'), 

('$protocolo','20','$tel20','$cabo20','$pri20','$ard20','$sec20','$cx20')

";







$sql3 = mysql_query($query3);

$sql2 = mysql_query($query2);



if($sql2)
{
  
  



 echo ' <h2>CADASTRADA COM SUCESSO!<br></h2> <h2 >ANOTE SEU PROTOCOLO:</h2>  <br> <h2 style="color:red;" > '. $protocolo. '</h2><br><br>

<a href="cadastro.php">VOLTAR </a>

 ';
  



  }
  

  

  

else
{
  
echo ' <h2>ERRO NO CADASTRO!!';

  
}






























?>




















</body>


</html>