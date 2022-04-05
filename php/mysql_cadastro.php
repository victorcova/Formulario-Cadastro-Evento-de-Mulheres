<?php
//Verifica duplicidade:
  $cont = "select COUNT(*) from tb_cadastro";
  $querycount = mysql_query($cont) or die(mysql_error());
  while($row = mysql_fetch_array($querycount)){
     $count = $row["COUNT(*)"];
  }
  
  $repetido = 0;
  $w = 1;
  $valorCPF = 0;

  while (($repetido == 0) && ($w <= $count)){
     $verificaCPF = "select cpf from tb_cadastro where id = $w;";
     $query_verificaCPF = mysql_query($verificaCPF) or die(mysql_error());
     while($row = mysql_fetch_array($query_verificaCPF)){
        $valorCPF = $row["cpf"];
     }
     $comparaCPF[$w] = $valorCPF;
  $w++;
  }

  for ($x = 1; $x <= $count; $x++){
     if ($cpf == $comparaCPF[$x]){
        $repetido = 1;// ACHOU CPF DUPLICADO!
     }
  }

/************************************************************************************/
//echo 'REP: '.$repetido;die;
if($repetido == 0){
   if($count < 190){//lotação auditório (202 pessoas)
      $sql_cadastro = mysql_query("insert into tb_cadastro values('','$name','$cpf','$telefone','$empresa','1')") or die(mysql_error());
   
      if(!$sql_cadastro){
         $log .= "Erro: INS#001CAD.<br>";
      }else{
         $cadastro = 1;
      }
      }else{
         $log .= "<font color = 'red'><b>LOTA&Ccedil;&Atilde;O DO AUDIT&Oacute;RIO ESGOTADA</b></font><br>";
         $log .= "<font color = '333333'><b><i>D&uacute;vidas? Ligue: 3204-5007</b></i></font>";
      }
}else{
   $log .= "<font color = 'red'>O CPF <b>".$cpf."</b> j&aacute; foi cadastrado.</font><br>";
   $log .= "<font color = '333333'><b><i>Erro: CAD#REP#001.</b></i></font>";
}
?>

