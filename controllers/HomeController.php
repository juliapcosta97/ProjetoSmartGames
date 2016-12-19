
<?php 
require_once('models/produto_class.php');


    class HomeController{
        
        
        public function index(){
            
            $p = new Produto();
            $produtos = $p->selectAll();
                    
            require_once("views/home.php");
        }
        
        public function busca(){
            
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
			 	$pesquisa = $_POST['txtBusca'];	
            }

            
            $p = new Produto();
            $produtos = $p->selectByName($pesquisa);
       
            require_once("views/home.php");
        }
        
        public function detalhes(){
            
            $p = new Produto();
            $produto = $p->selectById($_GET['id']);
                     
            require_once("views/detalhes.php");
        }
        
        public function login(){
           require_once("views/login.php");
        }
        
    }



?>