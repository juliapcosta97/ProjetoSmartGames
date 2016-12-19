<?php 
	

    $controller = $_GET['controller'];
    $modo = $_GET['modo'];

    require_once('controllers/' . $controller . 'Controller.php');

    

	switch ($controller)
	{
            
		case 'Home':	
			$controller = new HomeController();

            switch($modo)
            {
                case 'index':
                   $controller->index();
                  
                break;
                    
                case 'detalhes':
                   $controller->detalhes();
                  
                break;
                    
                case 'busca':
                   $controller->busca();
                  
                break;
       
            }
        break;
            
        case 'Login':
            $controller = new LoginController();

            switch($modo)
            {
                case 'entrar':
                   $controller->entrar();
                    
                break;
                    
                case 'login':
                   $controller->login();
                    
                break;
           
            }
        break;
				
	}

?>