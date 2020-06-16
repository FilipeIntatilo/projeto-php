<!--Projeto desenvolvido pelos alunos Julio Cesar Sousa Melo e Filipe de Sousa Lima -->
<!--Tecnologia em Análise e Desenvolvimento de Sistemas/Noturno-->
<!-- //PARTE FILIPE-->
<?php
$nome_servidor = "sql300.epizy.com";
$nome_usuario = "epiz_26021651";
$senha = "cEoyjuR9Oe";
$nome_banco = "epiz_26021651_banco_projeto";

$email = $_POST['email'];

// Criar conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);
// Verificar Conexão
if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}
echo "";


$sql = "SELECT * FROM usuario WHERE email ='$email'";
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
mysqli_set_charset($conecta, "utf8");
$conecta->close();
?>