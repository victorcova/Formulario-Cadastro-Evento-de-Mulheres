<?php
//header('Content-type: text/html; charset="iso-8859-1"');
require 'php/conexao.php';

#seleciona as empresas
$query = mysql_query("SELECT coop FROM tb_coops WHERE ativo = 1 ORDER BY coop ASC");
//var_dump($query);die;

?>

<!DOCTYPE html>
<head>
	<title>Nelma Penteado - Mulher Diamante</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/diamond.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="php/cadastra.php" method="post">
				<span class="contact100-form-title"><a href="index.php"><img src="images/marca-diamante.png" width="250" height="158" alt=""/></a></span>

				<div class="wrap-input100 validate-input" data-validate="NOME obrigatório">
					<span class="label-input100">Nome:</span>
					<input class="input100" type="text" name="name" placeholder="Informe seu nome completo" id="name" maxlength="100" autofocus>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "CPF obrigatório.">
					<span class="label-input100">CPF</span>
				  <input class="input100" type="text" name="cpf" placeholder="Informe seu CPF" id="cpf" maxlength="11">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "TELEFONE obrigatório.">
					<span class="label-input100">TELEFONE CELULAR</span>
					<input class="input100" type="text" name="telefone" placeholder="Informe seu telefone celular" id="telefone" maxlength="13">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "EMPRESA obrigatório.">
					<span class="label-input100">Empresa</span>
					<div>
					  <select class="selection-2" name="empresa" id="empresa" >
					    <option value="0" selected="SELECTED">Selecione</option>

                        <?php while($dados = mysql_fetch_array($query)) { ?>
                        <option value="<?php echo $dados['coop'] ?>"><?php echo $dados['coop'] ?></option>
                        <?php } ?>

				      </select>
					</div>
					<span class="focus-input100"></span>
				</div>
			  <div class="container-contact100-form-btn">
				  <div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Sou mulher e quero me cadastrar
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
				</div>
			  </div>
			  <div align="center"><br>
				<font size="1"><em>*Evento apenas para convidadas mulheres.</em></font>
			  </div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>
</html>
