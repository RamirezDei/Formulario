<?php 
    class Db
	{
		private static $instance=null;
		
		public function __construct()
		{
		}
	
		public static function getConnect()
		{
			if (!isset(self::$instance)) {
				$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
				self::$instance= new PDO('mysql:host=localhost;dbname=formulario', 'root', '', $pdo_options);
			}
			return self::$instance;
		}
	}
        class Main{ 
						public $_servidor="localhost";
						protected $_pass="";
						protected $_bd="encuestaer";
						public  $_user="root";    
			
				public function __construct() 
				{
				
		     $this->_db = new mysqli($this->_servidor,$this->_user,$this->_pass,$this->_bd); 
				   if ( $this->_db->connect_errno ) 
					{ 
				 echo "Fallo al conectar a MySQL: ".$this->_db->connect_error; 
						return;     
			   } 
				$this->_db->set_charset('utf-8'); 
				} 
				
				 public   function TrasactcomitStart(){
				  $this->_db->autocommit(FALSE);
                  }
                           public  function Commit(){

                	      $this->_db->commit();
                         }
                    
				public   function dbAbreDatabase($sql){
				$resultado=$this->_db->query($sql)or die($this->_db->error); ; 	
					return $resultado;	
				}
				public   function dbTrareGistro($resultado) 
				{ 
				  return  mysqli_fetch_array($resultado, MYSQLI_ASSOC);
				  $this->_db->set_charset('utf-8');
			   }
				public   function dbnumField($res){
					return mysqli_num_fields($res);	
					}
				public   function numeroDeCampos($res){
				return mysqli_num_rows($res);	
					}
				public   function dbNombreCampo($res){
				 return	mysqli_fetch_field($res);	
				}
				
				public   function escpCart($var){
					return mysqli_real_escape_string($var);
					
					}
				public  function  __destruct(){
				mysqli_close($this->_db);  
				
				
					}
		

			
	}

 ?>