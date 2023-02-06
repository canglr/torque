<?php 
class AuthManage {
	
	public function __construct()
    {
     	
    }
	
	public function auth($data)
	{
    	
		if($data)
        {
        	$_SESSION["user"] = $data;
        	return true;
        }else{
        	return false;
        }
       
	}

	public function loginCheck()
	{
    	
		$data = $_SESSION["user"];
    	
       	if(!$data)
        {
        	header("Location: /account/login");
			die();
        }
	}

	public function getUser()
	{
		$data = $_SESSION["user"];
       	return $data;
	}

	public function logout()
	{
    	session_destroy();
	}


}


?>