<!--Projeto desenvolvido pelos alunos Julio Cesar Sousa Melo e Filipe de Sousa Lima -->
<!--Tecnologia em Análise e Desenvolvimento de Sistemas/Noturno-->
<!-- //PARTE JULIO-->

<!DOCTYPE html>
<html lang="pt-br" class="no-js">
   
    <head>  <!-- Início do HEAD -->
        
        <meta charset="utf-8"/>
        <title>Code Friends</title>

        
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>
        
        <link rel="shortcut icon" href="images/favicon.ico" />  <!-- Aqui está o Favicon -->
     
    <!-- Final do HEAD -->    
    </head>
   
  
    <body id="body" data-spy="scroll" data-target=".header">

            <header class="header navbar-fixed-top">
                <nav class="navbar" role="navigation">
                  <div class="container">
                        <div class="menu-container js_nav-item">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="toggle-icon"></span>
                          </button>

                            <div class="logo">
                              <a class="logo-wrap" href="#body">
                                   <!-- <img class="logo-img logo-img-main" src="images/log-site.png" alt="Logo Code Friends"> 
                                   <img class="logo-img logo-img-active" src="images/log-site.png" alt="Logo Code Friends">  -->
                              </a>
                          </div>
                      </div>

                      <div class="collapse navbar-collapse nav-collapse">
                          <div class="menu-container">
                              <ul class="nav navbar-nav navbar-nav-right">


                                  <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Home</a></li>
                                  <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="link-pagina-html.html">Html</a></li>
                                  <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="link-pagina-php.html">Php</a></li>
                                  <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="link-pagina-java.html">Java</a></li>
                                  <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="link-duvidas.html">Dúvidas</a></li>

                                  <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Contato</a></li>
                                  <script src="https://kit.fontawesome.com/5a9891bfba.js" crossorigin="anonymous"></script>

                                  <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="Logout.php"><i class="fas fa-sign-out-alt">Logout</i></a></li>
                                  
                              </ul>
                          </div>
                      </div>

                  </div>
                </nav>
            </header>
       
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <div class="carousel-inner" role="listbox">
                
                <!-- Carrosel 1 -->
                <div class="item active">
                    <img class="img-responsive" src="images/wallpaper-principal01.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                
                                
                                <h1 class="carousel-title">Seja Bem-Vindo(a) </h1> 

                                 <h1 class="carousel-title">Ao seu site de Tecnologia</h1>
                                
                                <!-- <h2><p class="color-white">O lugar que busca trazer facilidade na vida dos programadores <br/> e incentivar novos.</p></h2> -->
                            </div>
                           <a href="#about" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Continuar</a> 
                        </div>
                    </div>
                </div>
                <!-- Final do Carrosel 1 -->
                
                <!-- Carrosel 2 -->
                <div class="item">
                    <img class="img-responsive" src="img/1920x1080/02.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title"></h2>
                                <p class="color-white"> <br/> </p>
                            </div>
                        <!-- <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Detalhes</a> caso eu queira direcionar a outra página   -->
                        </div>
                    </div>
                </div>
                <!-- Final do Carrosel 2 -->
                
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== LAYOUT DA PÁGINA ==========-->
        <!-- About -->
        <div id="about">
            <div class="content-lg container">
                
                
                <!-- Simples explicação sobre as 3 "linguagens" abordadas (HTML, PHP, JAVA) -->
                
                <h2>Conteúdos Abordados até Agora:</h2><br/><br/>
                <div class="masonry-grid row">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 sm-margin-b-30">
                        <div class="margin-b-60">
                            <h2>HTML</h2>
                            <p>HTML é uma das linguagens que utilizamos para desenvolver websites. O acrônimo HTML vem do inglês e significa Hypertext Markup Language ou em português Linguagem de Marcação de Hipertexto. </p>
                        </div>
                        <img class="full-width img-responsive wow fadeInUp" src="images/html-imagem.png" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".2s">
                    </div>
                    
                    
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                        <div class="margin-b-60">
                          <h2>PHP</h2>
                          <p>PHP é uma linguagem de programação gratuita e de código aberto. O que parece uma sigla, na verdade é um acrônimo recursivo que significa Hypertext Preprocessor.
</p>  
                        </div>
						 <img class="full-width img-responsive wow fadeInUp" src="images/php-imagem.jpg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".3s">
                    </div>
                    
                    
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                        <div class="margin-t-60 margin-b-60">
                            <h2>JAVA</h2>
                            <p>Java é uma linguagem de programação orientada a objetos. Tal linguagem possibilita a criação de programas para diferentes plataformas e sistemas operacionais.</p>
                        </div>
                        <img class="full-width img-responsive wow fadeInUp" src="images/java-imagem.jpg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".4s">
                    </div>
				</div>
                <!-- Final da Simples Explicação -->
                
                
                
            </div>
            
            <!-- Início do Sobre ------------------->
            <div class="bg-color-sky-light">
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 md-margin-b-60">
                            <div class="margin-t-50 margin-b-30">
                                <h2>Por que usar nosso site ?</h2>
                                <p>Nosso objetivo principal é trazer para as pessoas conteúdos de qualidade sobre Tecnologia. Ao lado estão outros 3 motivos fundamentais para nossa aceitação: </p>
                            </div>
                            <!-- <a href="#" class="btn-theme btn-theme-sm btn-white-bg text-uppercase">Motivo 1</a><br/><br/> caso queira colocar botões-->

                        </div>
                        <div class="col-md-5 col-sm-7 col-md-offset-2">
                            <!-- Início do Accodrion -->
                            <div class="accordion">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    
                                   
                                    <div class="panel panel-default" >
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a  class="panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Direto ao ponto
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                Nossa equipe se preocupa em reunir conteúdos que agilizem o aprendizado de qualquer indivíduo, mesmo no estágio "iniciante" até o "avançado".
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Exemplos Práticos
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                               Assim como qualquer pessoa, nós já fomos estudantes e tentamos ao máximo trazer exemplos que de fato gerem um entendimento maior.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Preocupação total com os usuários.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                O nosso foco é e sempre será a dedição a vocês, caso aja qualquer dúvida sobre os assuntos, se sinta confortável para enviar uma mensagem na aba de  <a href="link-pagina-duvidas.html" target="_blank">DÚVIDAS</a>.
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- Final do Accodrion -->
                        </div>
                    </div>
                    <!--// Final da linha -->
                </div>
            </div>
        </div>
        <!-- Final do Sobre ------------------->

        <!-- Início das Demonstrações de Postagens -->
        <div id="products">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Postagens Recentes</h2>
                        <p>Aqui estão algumas postagens que são apresentadas dícas, técnicas, materiais de apoio, entre outros.</p>
                    </div>
                </div>
                <!--// final da linha -->

                <div class="row">
                    
                    <!-- Postagem 1 -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive" src="images/imagem-postagem-html.jpg" alt="Latest Products Image">
                        </div>
                        <h4><a href="#">Saiba o básico para seu primeiro arquivo HTML</a> <span c2lass="text-uppercase margin-l-20">HTML</span></h4>
                        <p>Saiba como direcionar para outra página HTML ou PHP , com apenas 1 linha de código.</p>
                        <a class="link" href="link-pagina-html.html">Detalhes</a>
                    </div>
                    <!-- Final da Postagem 1 -->
                     
                    <!-- Postagem 2 -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive" src="images/imagem-postagem-php.jpg" alt="Latest Products Image">
                        </div>
                        <h4><a href="#">Redirecionar para outra página HTML ou PHP</a> <span class="text-uppercase margin-l-20">PHP</span></h4>
                        <p>Saiba como direcionar para outra página HTML ou PHP , com apenas 1 linha de código.</p>
                        <a class="link" href="link-pagina-php.html">Detalhes</a>
                    </div>
                    <!-- Final da Postagem 2 -->
                     
                    <!-- Postagem 3 -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive" src="images/imagem-postagem-java.jpg" alt="Latest Products Image">
                        </div>
                        <h4><a href="#">Entenda a lógica de Herança</a> <span class="text-uppercase margin-l-20">Java</span></h4>
                        <p>Toda pessoa que inicia seus estudos de Java e nunca tinha ouvido falar sobre POO (Programação Orietada a Objeto), já deve ter tido dificuldade em entender como funcionam os Objetos .</p>
                        <a class="link" href="link-pagina-java.html">Detalhes</a>
                    </div>
                    <!-- Final da Postagem 3 -->

                  

                  
                     
                     
                </div>
                <!--// Final da linha -->
            </div>
        </div>
        <!-- Final das Demonstrações de Postagens -->

        <!-- Área da divulgação de algumas plataformas de estudos  -->
        <div id="pricing">
            <div class="bg-color-sky-light">
                <div class="content-lg container">
                    <div class="row row-space-1">
                        
                        <h2>Plataformas de cursos online que indicamos: </h2>
                        <div class="col-sm-4 sm-margin-b-2">
                            
                            <!-- Plataforma 1 -->
                            <div class="pricing">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-badge"></i>   <!--  icon-chemistry  (icone científico)-->
                                    <h3>Udemy<span> a partir de $</span> 25.80</h3>
                                    <p>"Uma de suas principais vantagens é um portfólio bem amplo e diversificado".</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">É possível aprender desde programação HTML básica, até idiomas como inglês, alemão e árabe.</li>
                                    <li class="pricing-list-item">Altos números de opções de cursos</li>
                                    <li class="pricing-list-item">A plataforma possui cursos no nosso idioma, e legendas para aqueles em língua estrangeira.</li>
                                </ul>
                                <a href="https://www.udemy.com/" class="btn-theme btn-theme-sm btn-default-bg text-uppercase" target="_blank">Saiba Mais</a>
                            </div>
                            <!-- Final da plataforma 1 -->  
                        </div>
                        
                        <div class="col-sm-4 sm-margin-b-2">
                            <!-- Plataforma 2 -->
                            <div class="pricing pricing-active">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-badge"></i>
                                    <h3>Curso em Vídeo <span> - $</span> FREE</h3>
                                    <p>"Estude gratuitamente e aprenda com conteúdo e professores de qualidade".</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">Professor com excelente didática</li>
                                    <li class="pricing-list-item">Cursos de Qualidade</li>
                                    <li class="pricing-list-item">Os cursos são gratuitos</li>
                                    <li class="pricing-list-item">A emissão dos certificados são pagas (cerca de R$ 10,0)</li>
                                </ul>
                                <a href="https://www.cursoemvideo.com/" class="btn-theme btn-theme-sm btn-default-bg text-uppercase" target="_blank">Saiba Mais</a>
                            </div>
                            <!-- Final da plataforma 2 -->
                        </div>
                        
                        <div class="col-sm-4">
                            <!-- Plataforma 3 -->
                            <div class="pricing">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-badge"></i>  <!--  icon-chemistry  (icone de um escudo)-->
                                    <h3>Alura <span> a partir de $</span> 75.00</h3>
                                    <p>"O Alura é uma plataforma focada em cursos nas áreas de inovação e tecnologia".</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">Apresenta categorias como: mobile, programação, front-end, infra, design & UX, Marketing Digital e muito mais.</li>
                                    <li class="pricing-list-item">Todos os cursos são produzidos por brasileiros.</li>
                                    <li class="pricing-list-item">Fórum completo e voltado para discussões sobre os temas listados.</li>
                                </ul>
                                <a href="https://www.alura.com.br/" class="btn-theme btn-theme-sm btn-default-bg text-uppercase" target="_blank">Saiba Mais</a>
                            </div>
                            <!-- Final da plataforma 3 -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- Final da Área da divulgação -->

        <!-- Work -->
        <div id="work">
            <div class="section-seperator">
                <div class="content-md container">
                    <div class="row margin-b-40">
                        <div class="col-sm-6">
                            <h2>Depoimentos</h2>
                            <p>Alguns breves depoimentos sobre a eficacia do site e da equipe.</p>
                        </div>
                    </div>
                    <!--// end row -->

                    <!-- Masonry Grid -->
                    <div class="masonry-grid row">


                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-30">
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/397x300/01.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5">Art Of Coding</h3>
                                            <span>Clean &amp; Minimalistic Design</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
                                                    <p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
                                                    <p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
                                                    <p class="margin-b-5"><strong>Client:</strong> FairTech</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-30">
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/397x300/02.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5">Art Of Coding</h3>
                                            <span>Clean &amp; Minimalistic Design</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
                                                    <p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
                                                    <p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
                                                    <p class="margin-b-5"><strong>Client:</strong> Keenthemes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/397x300/03.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5">Art Of Coding</h3>
                                            <span>Clean &amp; Minimalistic Design</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
                                                    <p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
                                                    <p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
                                                    <p class="margin-b-5"><strong>Client:</strong> Keenthemes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Work -->
                        </div>
						<div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
						<div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-30">
                            <!-- Work --><!--
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/397x415/01.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5">Art Of Coding</h3>
                                            <span>Clean &amp; Minimalistic Design</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
                                                    <p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
                                                    <p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
                                                    <p class="margin-b-5"><strong>Client:</strong> FairTech</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8 margin-b-30">
                            <!-- Work --> <!--
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="img/800x400/01.jpg" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5">Art Of Coding</h3>
                                            <span>Clean &amp; Minimalistic Design</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
                                                    <p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
                                                    <p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
                                                    <p class="margin-b-5"><strong>Client:</strong> FairTech</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <!-- End Work -->
                        </div>
                    </div>
                    <!-- End Masonry Grid -->
                </div>
            </div>
            
            
            <!-- Início Temas Abordados -->
            <div class="content-lg container">
                
                <h3>Arraste os ícones</h3><br/><br/><br/>
                
                <!-- Início Swiper de Temas -->
                <div class="swiper-slider swiper-clients">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="images/icones/icone-html.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="images/icones/icone-php.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="images/icones/icone-java.png" alt="Clients Logo">
                        </div>
                       
                    </div>
                    <!-- End Swiper Wrapper -->
                </div>
                <!-- Final Swiper de Temas -->
            </div>
            <!-- Final de Temas Abordados -->
        </div>
        <!-- End Work -->
        
        <!-- Contato      Aqui que está o contato do Júlio César , e do Filipe de Sousa                                  --> 
        <div id="contact">
            <!-- Lista de Contato -->
            <div class="section-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <!-- Lista de Contato 1 - Júlio César S-->
                        <div class="col-sm-4 sm-margin-b-50">
                            <h3>Júlio César S<span class="text-uppercase margin-l-20">Desenvolvedor</span></h3>
                            <p>Texto teste Texto teste Texto teste Texto teste Texto teste Texto teste Texto teste Texto teste Texto teste Texto teste </p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> +55 61 99803 - 2236</li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> jcesarsm17@gmail.com</li>
                            </ul>
                        </div>
                        <!-- Final da Lista de Contato 1 -->

                        <!-- Lista de Contato 2 - Filipe de Sousa-->
                        <div class="col-sm-4 sm-margin-b-50">
                            <h3>Filipe de Sousa<span class="text-uppercase margin-l-20">Desenvolvedor</span></h3>
                            <p>Texto teste Texto teste Texto teste Texto teste Texto teste Texto teste Texto teste Texto teste Texto teste Texto teste </p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> +55 61 99528 - 5271</li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> filipeintatilo@gmail.com</li>
                            </ul>
                        </div>
                        <!-- Final da Lista de Contato 2 -->
                        
                        <!-- Lista de Contato 3 - Friends Code-->
                        <div class="col-sm-4 sm-margin-b-50">
                            <h3>Code Friends<span class="text-uppercase margin-l-20">Empresa</span></h3>
                            <p>Texto teste Texto teste Texto teste Texto teste Texto teste Texto teste Texto teste Texto teste Texto teste Texto teste </p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> +55 61 3084 - 7256</li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> friendscode@gmail.com</li>
                            </ul>
                        </div>
                        <!-- Final da Lista de Contato 3  -->
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- Final da Lista de Contato -->
            
            <!-- Google Map -->
            <div class="map height-300">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122897.76088755472!2d-48.007397855112664!3d-15.721750984055818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3d18df9ae275%3A0x738470e469754a24!2zQnJhc8OtbGlhLCBERg!5e0!3m2!1spt-BR!2sbr!4v1592029021064!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
    
        </div>
        <!-- Final de Contato -->
        <!--========== FINAL DA PÁGINA DE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Início dos Links -->
            <div class="section-seperator">
                <div class="content-md container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- Lista -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#body">Home</a></li>
                                <!--<li class="footer-list-item"><a href="#about">Team</a></li>
                                <li class="footer-list-item"><a href="#work">Credentials</a></li>-->
                                <li class="footer-list-item"><a href="#contact">Contato</a></li>
                            </ul>
                            <!-- Final da Lista -->
                        </div>
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- Lista -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#">Twitter</a></li>
                                <li class="footer-list-item"><a href="#">Facebook</a></li>
                                <li class="footer-list-item"><a href="#">Instagram</a></li>
                                <li class="footer-list-item"><a href="#">YouTube</a></li>
                            </ul>
                            <!-- Final da Lista -->
                        </div>
                        <div class="col-sm-3">
                            <!-- Lista -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="link-pagina-duvidas.html">Deixe sua dúvida/opnião</a></li>
                                <li class="footer-list-item"><a href="#">Política de Privacidade</a></li>
                                <li class="footer-list-item"><a href="#">Termos &amp; Condições</a></li>
                            </ul>
                            <!-- Final da Lista -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- Final dos Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                      <img class="footer-logo" src="images/logo-site.png" alt="Logo Code Friends">   <!-- POR MINHA LOGO AQUI -->
                    </div>
                    <div class="col-xs-6 text-right">
                       <p class="margin-b-0"><a class="fweight-700" href="#contact">Code Friends</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- PLUGINS PRINCIPAIS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PLUGINS DE NÍVEL DE PÁGINA -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- SCRIPTS DE NÍVEL DE PÁGINA -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- Final do BODY -->
</html>
