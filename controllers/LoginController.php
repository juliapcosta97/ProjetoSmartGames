
<?php 

require_once('models/login_class.php');

    class LoginController{
        
        private $usuario;
        private $senha;
        
        
        public function getUsuario(){
            return $this->usuario;
        }
        
        public function setUsuario($user){
            $this->usuario = $user;
        }
        
        public function getSenha(){
            return $this->senha;
        }
        
        public function setSenha($password){
            $this->senha = $password;
        }
        
        public function getValorInputs(){
            if($_SERVER['REQUEST_METHOD']==='POST')
            {
			 	$this->setUsuario($_POST['txtUsuario']);	
			 	$this->setSenha($_POST['txtSenha']);
            }
        }
        
        public function entrar(){
            $this->getValorInputs();
            
            $login = new Login();
            $login->setUsuario($this->usuario);
            $login->setSenha($this->senha);
            
            if($login->verificaUsuario()){
                
                header( 'Location: router.php?controller=Home&modo=index');
            }else{
                echo("<script>
					alert('Usuario ou Senha incorreto');

					location.href = 'router.php?controller=Login&modo=login';
				</script>");
	
           }
           
        }
        
        public function login(){
            require_once("views/login.php");
        }
           
    }



?>