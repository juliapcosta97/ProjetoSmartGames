<?php

class mysql_db{
	
	public $server;
	public $user;
	public $password;
	
	public function __construct(){
	
        
        $this->server="localhost";
		$this->user="root";
		$this->password="bcd127";
	}
	
	public function conectar(){
		
		if($this->conexao=mysql_connect($this->server, $this->user, $this->password))
		{
			
			mysql_select_db("dbsmartgames");
            mysql_set_charset("utf8");
		}else{
			
			echo("Erro na conexao com o BD.". mysql_error());
			die();
		}
	}
	
	public function descconectar(){	
		mysql_close($this->conexao);
	}	
}

?>
