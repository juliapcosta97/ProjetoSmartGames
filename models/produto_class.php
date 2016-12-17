<?php

require_once('models/conexao_mysql.php');

    class Produto{
        
        public $codGame;
        public $nome;  
        public $descricao; 
        public $preco; 
        public $classificacao;
        public $imagem; 
        public $desenvolvedor; 
        public $plataforma; 
        public $genero; 
        public $loja;
        
        
        public function __construct(){
        
            $conexao = new mysql_db();

            $conexao->conectar();
            
        }
        
        public function selectAll(){
       
            $sql = "select * from tblgame";
			
			$select = mysql_query($sql);
			
            $listaProdutos = array();
            
			while($rs = mysql_fetch_array($select)){
				
                $p = new Produto();
                $p->codGame = $rs['codgame'];
				$p->nome = $rs['nome'];
				$p->descricao = $rs['descricao'];
				$p->preco = $rs['preco'];
				$p->classificacao = $rs['classificacao'];
				$p->imagem = $rs['imagem'];
				$p->desenvolvedor = $rs['desenvolvedor'];
				$p->plataforma = $rs['plataforma'];
				$p->genero = $rs['genero'];
             
                
                $listaProdutos[] = $p;
			}
        
            return  $listaProdutos;   
        }
        
        public function selectById($id){
       
            $sql = "select * from tblgame where codgame=".$id;
			
			$select = mysql_query($sql);
            
			if($rs = mysql_fetch_array($select)){
				
                $p = new Produto();
                $p->codGame = $rs['codgame'];
				$p->nome = $rs['nome'];
				$p->descricao = $rs['descricao'];
				$p->preco = $rs['preco'];
				$p->classificacao = $rs['classificacao'];
				$p->imagem = $rs['imagem'];
				$p->desenvolvedor = $rs['desenvolvedor'];
				$p->plataforma = $rs['plataforma'];
				$p->genero = $rs['genero'];
			}
        
            return  $p;   
        }
        
       
    }
?>