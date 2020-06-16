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

$sql = "DELETE FROM Usuario WHERE email='$email'";
if ($conecta->query($sql) === TRUE) {
    echo "<script> 
                alert('A conta referente ao email informado foi apagada com sucesso');
                window.location.href = 'index_Excluir.html';
           </script>";
} else {
    echo "Erro ao apagar o registro: " . $conecta->error . "<br>";
}
$conecta->close();
?>
 

