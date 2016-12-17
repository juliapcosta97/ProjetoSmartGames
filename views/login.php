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
    
<body>
    
    <div class="imgLogo"><img src="conteudo/imagens/icone.png" ></div>

<div id="conteudo">

        <div class="formularioLogin">
            <h1>Entrar</h1>
            <form method="post" name="frmLogin" action="router.php?controller=Login&modo=entrar">
                <p class="login">Usuário: </p> <input type="text" name="txtUsuario" class="inputLogin" required>
                <p class="login">Senha: </p> <input type="password" name="txtSenha" class="inputLogin" required>
                <input type="submit" value="Entrar" name="btnEntrar" class="btnEntrar">

            </form>
        </div>
       
</div>
    
    <footer>
    
    </footer>
    
    
</body>    


</html>