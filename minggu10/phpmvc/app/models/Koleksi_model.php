<?php

class Koleksi_model {
    private $dbh; //databasehandler
	private $stmt;
	
	public function __construct()
	{
		//datasourcename
		$dsn = 'mysql:host=localhost;dbname=phpmvc';
		
		try{
			$this->dbh = new PDO($dsn, 'root', '');
		}catch(PDOException $e) {
			die($e->getMessage());
	}
	}
	
	public function getAllBuku()
	{
	    $this->stmt = $this->dbh->prepare('SELECT * FROM koleksi');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}