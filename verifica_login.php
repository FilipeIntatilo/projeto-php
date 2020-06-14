<!--Projeto desenvolvido pelos alunos Julio Cesar Sousa Melo e Filipe de Sousa Lima -->
<!--Tecnologia em Análise e Desenvolvimento de Sistemas/Noturno-->
<!-- //PARTE FILIPE-->
<?php
session_start();
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "Banco_Projeto";


// Criar conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);
// Verificar Conexão
if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}
echo "";

$email = isset($_POST['email'])?$_POST['email']:"";
$senha = isset($_POST['senha'])?$_POST['senha']:"";

$tenta_achar = "SELECT * FROM Usuario WHERE email='$email' AND senha='$senha' ";
$resultado = $conecta->query($tenta_achar);
if ($resultado->num_rows > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('location:site_Principal.html');
} else {
    session_unset(); //remove todas as variáveis de sessão
    session_destroy();
    echo "<script> 
                alert('Login ou senha incorreto');
                window.location.href = 'index.html';
           </script>";
}
$conecta->close();
?>

