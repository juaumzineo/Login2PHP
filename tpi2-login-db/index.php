<?php require_once 'config.php';?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE);?>
<?php $db = open_database();?>

<link rel="stylesheet" href="assets/stylelogin.css">
<h1>Cadastro de Colaboradores</h1>

<?php if ($db) : ?>

<form name="formName" action="login.php" method="POST">
<div class="row">
<div class="col-xs-6 col-sm-3 col-md-2">
<p>Digite o seu login</p><br>
</div>
<div class="col-xs-6 col-sm-3 col-md-2">
<input type="text" name="login" size="50" maxlength="40"
required="required"><br>
</div>
</div>

<div class="row">
<div class="col-xs-6 col-sm-3 col-md-2">
<p>Digite sua senha</p><br>
</div>
<div class="col-xs-6 col-sm-3 col-md-2">
<input type="text"
name="senha" size="50" maxlength="40"
required="required" placeholder="Tipo 123" onkeypress="return blokletras(event)"><br><br>
</div>
</div>
<button type="submit" class="btn btn-primary" value="Login">Login</button>
</form>
<?php else : ?>
<div class="alert alert-danger" role="alert">
<p><strong>ERRO:</strong>Não foi possível Conectar ao Banco de Dados!</p>
</div>
<?php endif; ?>
<?php include(FOOTER_TEMPLATE);?>