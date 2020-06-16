<!--Projeto desenvolvido pelos alunos Julio Cesar Sousa Melo e Filipe de Sousa Lima -->
<!--Tecnologia em Análise e Desenvolvimento de Sistemas/Noturno-->
<!-- //PARTE FILIPE-->
<?php
$nome_servidor = "sql300.epizy.com";
$nome_usuario = "epiz_26021651";
$senha = "cEoyjuR9Oe";
$nome_banco = "epiz_26021651_banco_projeto";

// Criar conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);
// Verificar Conexão
if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}
echo "";

$nomeUsuario = $_POST['nomeUsuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuario (nome, email, senha)
VALUES ('$nomeUsuario', '$email', '$senha')";
if ($conecta->query($sql) === TRUE) {
    echo "<script> 
                alert('Usuário cadastrado com sucesso');
                window.location.href = 'index.html';
           </script>";
    
} else {
    echo "Erro: " . $sql . "<br>" . $conecta->error . "<br>";
    echo "<script> 
                alert('Erro no cadastro de usuário: " . $sql . "<br>" . $conecta->error . "<br>');
                window.location.href = 'index_Cadastro.html';
           </script>";
}
mysqli_set_charset($conecta, "utf8");
$conecta->close();
?>
 