<?php
class dbPdo{
	
	public static $pdo;
	
	public static function set_instance() {
		$host = 'mysql-ppe-sio2.alwaysdata.net';
		$dbname = 'ppe-sio2_ppe1';
		$login = 'ppe-sio2';
		$pass = 'theolgm88';
		
		try {
			
			self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $login, $pass);
			
		} catch (PDOException $ex) {
			
			echo $ex->getMessage();
			die('Probleme lors de la connexion a la BDD	');
			
		}
	}
}

//generer un objet PDO
dbPdo::set_instance();
?>
