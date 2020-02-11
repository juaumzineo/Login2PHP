<?php
    $loginSucess = false;
    $user = $_POST["login"]; $pass = $_POST["senha"];
    $Ruser = "aluno"; $Rpass = 123;
    if($user == $Ruser && $pass == $Rpass) {
        $loginSucess = true; } 
    if($loginSucess == true){
        echo "<script> alert('Logando...')</script>";
        echo "<link rel='stylesheet' href='assets/styleentrou.css'>";
        echo "<h1>Bem-Vindo(a)</h1>";
    } else {
        echo "<script>alert('Usuario ou senha errados, tente dnv')</script>";
        echo "<script>window.location.replace('index.php')</script>"; }
?>