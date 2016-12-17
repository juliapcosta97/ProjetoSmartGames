<!DOCTYPE html>
<html>

<head>
        
    <link rel="stylesheet" type="text/css" href="conteudo/css/style.css">
    
    <link rel="icon" href="conteudo/imagens/icone.png">
    
    <meta charset="UTF-8" />
    
    <title> Smart Games </title>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

    <script type="text/javascript">
        $(function(){
           $("#menu a").mouseover(function(){
              var menu = $(this).parent().children('.submenu');
              var submenu =  $(this).parent().parent();

              if(menu.length > 0 && menu.is(':hidden')){
                 $("#menu a").removeClass('ativo');
                 $(this).addClass('ativo');
                 $('.submenu').slideUp();
                 menu.slideDown();
              }
              if(!submenu.hasClass('submenu') && menu.length == 0){
                 $("#menu a").removeClass('ativo');
                 $(this).addClass('ativo');

                 $('.submenu').slideUp();
              }

           });
        });
    </script>
    
</head>
    

<header>
        <!--<img src="conteudo/imagens/imgFundo.jpg" class="imgFundo">-->
        <div class="imgLogo"><img src="conteudo/imagens/icone.png" ></div>
      
        
        <div class="formulario">
            <a href=""><img src="conteudo/imagens/buscar.png" class="imgBuscar"> </a>
            <form method="post" >
                <input type="text" class="inputPesquisa">
            </form>
            
        </div>
        
        <div class="btnSair"><a href="router.php?controller=Login&modo=login"><img src="conteudo/imagens/sair.png" class="imgSair"> Sair</a></div>
        
    </header>
    
    <nav id="menu" >
            <ul >
                <li><a>Gênero</a>
                    <!--<ul class="submenu">
                       <li><a href="#">Ação</a></li>
                       <li><a href="#">Aventura</a></li>
                       <li><a href="#">RPG</a></li>
                       <li><a href="#">Esportes</a></li>
                       <li><a href="#">Estratégia</a></li>
                       <li><a href="#">Luta</a></li>
                    </ul>-->
                </li>
                
                <li><a>Classificação</a>
                    <!--<ul class="submenu">
                       <li><a href="#">Livre</a></li>
                       <li><a href="#">+12</a></li>
                       <li><a href="#">+14</a></li>
                       <li><a href="#">+16</a></li>
                       <li><a href="#">+18</a></li>
                    </ul>-->
                </li>
                
                <li><a>Plataforma</a>
                    <!--<ul class="submenu">
                       <li><a href="#">Xbox One</a></li>
                       <li><a href="#">Xbox 360</a></li>
                       <li><a href="#">Playstation 3</a></li>
                       <li><a href="#">Playstation 4</a></li>
                       <li><a href="#">Nitendo Wii</a></li>
                       <li><a href="#">PC</a></li>
                    </ul>-->
                </li>
                
                <li><a>Desenvolvedor</a>
                    <!--<ul class="submenu">
                       <li><a href="#">Sony </a></li>
                       <li><a href="#">Take-Two</a></li>
                       <li><a href="#">Ubisoft </a></li>
                       <li><a href="#">Microsoft  </a></li>
                       <li><a href="#">EA  </a></li>
                       <li><a href="#">Nintendo </a></li>
                    </ul>-->
                </li>
            </ul>
       
    </nav>
    
    <div id="conteudo">

        <div id="detalhes">
            <img src="<?php echo($produto->imagem); ?>" class="imgDetalhes">
            
            <div id="titulo"><?php echo($produto->nome); ?></div>
            
            <div id="informacoes">
                <p>Plataforma: <?php echo($produto->plataforma); ?> </p>
                <p>Desenvolvedor: <?php echo($produto->desenvolvedor); ?></p>
                <p>Classificação: <?php echo($produto->classificacao); ?></p>
                <p>Gênero: <?php echo($produto->genero); ?></p>
                <p>Preço: R$ <?php echo($produto->preco); ?></p>
            </div>
            
            <div id="descricao">
                <p>Descrição: </p>
                <p><?php echo($produto->descricao); ?> </p>
            </div>
            
            <button onclick="">Onde Comprar </button>
        
        </div>
    
    </div>

    <footer>
    
    </footer>
    
    
</body>    


</html>