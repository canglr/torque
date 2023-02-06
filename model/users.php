<?php 
require_once('../helper/db.php');

class Users {
	private $db;
	public function __construct()
    {
     	$this->db = DB::getInstance();
		DB::setCharsetEncoding();
    }
	
	public function get($userid)
	{
    	
		$query = 'SELECT * FROM users WHERE id = :id';
    	$cmx = $this->db->prepare($query);
    	$cmx->bindParam(':id', $userid);
    	$cmx->execute();
		return $cmx->fetch(PDO::FETCH_OBJ);	
       
	}

	public function getAll()
	{
		$query = 'SELECT * FROM users';
    	$cmx = $this->db->prepare($query);
    	$cmx->execute();
		return $cmx->fetchAll(PDO::FETCH_ASSOC);	
	}

	public function update($userid,$user)
	{
    	
    	$query = 'update users set name = :name,surname = :surname, email = :email, phone = :phone where id = :id';
    	$cmx = $this->db->prepare($query);
    	$cmx->bindParam(':name', $user->name);
    	$cmx->bindParam(':surname', $user->surname);
    	$cmx->bindParam(':email', $user->email);
    	$cmx->bindParam(':phone', $user->phone);
        $cmx->bindParam(':id', $userid);
    	$cmx->execute();
    	if ($cmx->rowCount() > 0) {
        	$result->status = true;
        	$result->text = 'Bilgiler güncellendi';
    	} else {
        	$result->status = false;
        	$result->text = 'Bilgiler güncellenemedi';
    	}
		
       	return $result;
	}


	public function getLogs($userid)
	{
		$query = 'SELECT * FROM logs where id = :id';
    	$cmx = $this->db->prepare($query);
    	$cmx->bindParam(':id', $userid);
    	$cmx->execute();
		return $cmx->fetchAll(PDO::FETCH_ASSOC);	
	}


}


?>