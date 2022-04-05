<?php
include("conexao.php");
extract($_POST); // Extrai os dados do form
//echo $empresa;die;
$log = "";
$cadastro = 0;

/*############################################################################*/
//Tratamento inicial - segurança (nome e cpf)
if($name == "" || $cpf == "" || $telefone == "" || $empresa == "0"){
   $log .= "Houve um erro no preenchimento do formulário. Verifique os campos obrigatórios<br><a href='javascript:window.history.go(-1)'>Voltar</a>";
}//echo 'Log: '.$log;die;

/*############################################################################*/
//EXECUÇÕES:
require("trata_inputs.php");//Tratamento de inputs
require("mysql_cadastro.php");//Insert Cadastro

/*############################################################################*/

if($cadastro == 1){
   $log .= "
     <p><font color='#65bdbd' size=+1><strong>Seu inscri&ccedil;&atilde;o foi realizada com sucesso.</strong><br>
     <u>Nelma Penteado: Mulher Diamante</u><br>
     9 de maio de 2018 &agrave;s 9h no Centro Corporativo Sicoob - Audit&oacute;rio.
     <br>SIG Quadra 06 Lote 2080 - Bras&iacute;lia/DF.</font></p>
     ";
}else{
   $log = "Seu cadastro n&atilde;o foi realizado.<br>O sistema reportou o seguinte erro:<br>".$log;
}

?>

<!DOCTYPE html>
<html lang="pr-BR">
<head>
	<title>Nelma Penteado - Mulher Diamante</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/diamond.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">

				<span class="contact100-form-title"><a href="../index.php"><img src="../images/marca-diamante.png" width="250" height="158" alt=""/></a></span>
				<div align="center"><?php echo $log; ?></div>
			  <div class="container-contact100-form-btn"></div>
			  <div align="center"><br>
				<font size="1"><em>*Evento apenas para convidadas mulheres.</em></font>
			  </div>

		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>


</body>
</html>
