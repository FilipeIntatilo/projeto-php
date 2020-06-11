<?php

$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "Banco_Projeto";
$email = $_POST['email'];

// Criar conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);
// Verificar Conexão
if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}
echo "";


$sql = "SELECT * FROM Usuario WHERE email ='$email'";
$resultado = $conecta->query($sql);
if ($resultado->num_rows > 0) {
    // saída dos dados
    while ($linha = $resultado->fetch_assoc()) {
         echo "<script> 
                alert('O usuário possui cadastro no sistema.');
                window.location.href = 'index_Pesquisa.html';
           </script>";   
    }
} else {
     echo "<script> 
                alert('O email informado não corresponde a nenhum usuário registrado no sistema. Você será redirecionado para a página de cadastro!');
                window.location.href = 'index_Cadastro.html';
           </script>";
}
$conecta->close();
?>