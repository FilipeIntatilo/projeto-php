<!--Projeto desenvolvido pelos alunos Julio Cesar Sousa Melo e Filipe de Sousa Lima -->
<!--Tecnologia em Análise e Desenvolvimento de Sistemas/Noturno-->
<!-- //PARTE JULIO-->

<?php

session_unset(); //remove todas as variáveis de sessão
session_destroy();  // se você possui algum cookie relacionado com o login deve ser removido
header('location:index.html');
exit();

