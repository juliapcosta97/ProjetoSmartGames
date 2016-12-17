<?php

require_once('models/conexao_mysql.php');

    class Login{
        
        private $usuario;
        private $senha;
        public $conexao;
        
        public function __construct(){
        
            $this->conexao = new mysql_db();

            $this->conexao->conectar();
            
        }
        
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
        
        public function verificaUsuario(){
            $sql = "select * from tblusuario";
			
			$select = mysql_query($sql);
			
			while($rs = mysql_fetch_array($select)){
				
               if($this->getUsuario() == $rs['login'] and $this->getSenha() == $rs['senha']){
                   return true;
               }else{
                   return false;
               }
			}
        }
        
    }
?>