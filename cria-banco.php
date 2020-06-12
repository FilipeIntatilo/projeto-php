<!--Projeto desenvolvido pelos alunos Julio Cesar Sousa Melo e Filipe de Sousa Lima -->
<!--Tecnologia em Análise e Desenvolvimento de Sistemas/Noturno-->
<!-- //PARTE FILIPE-->
<?php
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
echo "Conexão realizada com sucesso";

//$sql = "CREATE DATABASE Banco_Projeto";
//if ($conecta->query($sql) === TRUE) {
//echo "Banco de dados criado com sucesso<br>";
//} else {
//echo "Erro na criação do banco de dados: " . $conecta->error."<br>";
//}
//$conecta->close(); 
//$sql = "CREATE TABLE Usuario(
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//email VARCHAR(50) NOT NULL,
//senha VARCHAR(20)
//)";
//if ($conecta->query($sql) === TRUE) {
//echo "Tabela Usuario criada com sucesso<br>";
//} else {
//echo "Erro na criação da tabela Usuario: " . $conecta->error."<br>";
//}
//$conecta->close();
//
?>
