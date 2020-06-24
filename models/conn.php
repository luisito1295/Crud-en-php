<?php 

	/**
	* clase de conexion
	*/
	class Conexion {
		
		public function conectar(){
			$link = new PDO('mysql:host=localhost;dbname=cursophpmvc', 'root', '');	
			return $link;	
		}
	}

?>