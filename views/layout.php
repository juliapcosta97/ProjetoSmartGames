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
        <?php //require_once("router.php"); ?>
    
    <footer>
    
    </footer>
    
    
</body>    


</html>