<?php 
require_once('../helper/db.php');

class Auth {
	private $db;
	public function __construct()
    {
     	$this->db = DB::getInstance();
		DB::setCharsetEncoding();
    }
	
	public function login($email,$password)
	{
    	
		$query = 'SELECT * FROM users WHERE email = :email and password = :password';
    	$cmx = $this->db->prepare($query);
    	$cmx->bindParam(':email', $email);
    	$cmx->bindParam(':password', md5($password));
    	$cmx->execute();
		return $cmx->fetch(PDO::FETCH_OBJ);	
       
	}

	public function userCheck($email)
	{
    	
		$query = 'SELECT * FROM users WHERE email = :email';
    	$cmx = $this->db->prepare($query);
    	$cmx->bindParam(':email', $email);
    	$cmx->execute();
		return $cmx->fetch(PDO::FETCH_OBJ);	
       
	}

	public function register($userobj)
	{
    	$result = new stdClass();
    	if($this->userCheck($userobj->email))
        {
        	$result->status = false;
        	$result->text = 'Kullanıcı zaten mevcut';
        }else{
        	$query = 'insert into users (name,surname,gender,email,phone,password,createdat,updatedat) values (?,?,?,?,?,?,?,?)';
    		$cmx = $this->db->prepare($query);
    		$cmx->execute(array($userobj->name,$userobj->surname,$userobj->gender,$userobj->email,$userobj->phone,md5($userobj->password),date('Y-m-d H:i:s'),date('Y-m-d H:i:s')));
    		$result->status = true;
        	$result->text = 'Kullanıcınız oluşturuldu';
        }
		return $result;
       
	}

	
	public function logs($userid,$ip)
	{
    	$query = 'insert into logs (userid,ip,createdat) values (?,?,?)';
    	$cmx = $this->db->prepare($query);
    	$cmx->execute(array($userid,$ip,date('Y-m-d H:i:s')));
	}

	public function lostpassword($email)
	{
    	$user = $this->userCheck($email);
    	if($user)
        {
        	$query = 'insert into lostpassword (userid,shareid,expired,createdat) values (?,?,?,?)';
    		$cmx = $this->db->prepare($query);
        	$expired = date('Y-m-d H:i:s',strtotime('+20 minutes',strtotime(date('Y-m-d H:i:s'))));
        	$shareid = md5(uniqid());
    		$cmx->execute(array($user->id,$shareid,$expired,date('Y-m-d H:i:s')));
        	$result->status = true;
        	$result->text = 'Şifre yenileme bağlantısı gönderildi';
        	$result->shareid = $shareid;
        }else{
        	$result->status = false;
        	$result->text = 'Kullanıcı bulunamadı';
        }
    	return $result;
    	
	}


	public function passwordChange($shareid,$password)
	{
    	
		$query = 'SELECT * FROM lostpassword WHERE shareid = :shareid and expired >= now()';
    	$cmx = $this->db->prepare($query);
    	$cmx->bindParam(':shareid', $shareid);
    	$cmx->execute();
		$key = $cmx->fetch(PDO::FETCH_OBJ);	
    	
    	if($key){
        	$query = 'update users set password = :password where id = :id';
    		$cmx = $this->db->prepare($query);
    		$cmx->bindParam(':password', md5($password));
        	$cmx->bindParam(':id', $key->userid);
    		$cmx->execute();
        	if ($cmx->rowCount() > 0) {
            	$query = 'update lostpassword set expired = :expired where shareid = :shareid';
    			$cmx = $this->db->prepare($query);
        		$cmx->bindParam(':expired', date('Y-m-d H:i:s'));
            	$cmx->bindParam(':shareid', $shareid);
    			$cmx->execute();
        		$result->status = true;
        		$result->text = 'Şifre değiştirildi';
    		} else {
        		$result->status = false;
        		$result->text = 'Şifre değiştirilemedi';
    		}
    		$result->status = true;
        	$result->text = 'Şifre değiştirildi';
        }else{
    		$result->status = false;
        	$result->text = 'Şifre değiştirilemedi';
        }
       	return $result;
	}


	public function newpassword($userid,$oldpassword,$newpassword)
	{
    	$oldpassword = md5($oldpassword);
    	$newpassword = md5($newpassword);
    	
		$query = 'SELECT * FROM users WHERE id = :id and password = :password';
    	$cmx = $this->db->prepare($query);
    	$cmx->bindParam(':id', $userid);
    	$cmx->bindParam(':password', $oldpassword);
    	$cmx->execute();
		$data = $cmx->fetch(PDO::FETCH_OBJ);
    	if($data){
        	$query = 'update users set password = :password where id = :id';
    		$cmx = $this->db->prepare($query);
    		$cmx->bindParam(':password', $newpassword);
        	$cmx->bindParam(':id', $userid);
    		$cmx->execute();
        	if ($cmx->rowCount() > 0) {
        		return true;
    		} else {
            	
        		return false;
    		}
    		return true;
        }else{
    		return false;
        }
       	
	}



}


?>