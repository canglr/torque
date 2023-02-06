<?php 
include_once 'class.phpmailer.php';
require_once ('smarty.php');
class Email {
	private $mail;
	private $smarty;
	public function __construct()
    {
     	$this->mail = new PHPMailer();
    	$this->smarty = SM::getInstance();
    }
	
	public function send($subject,$content,$sendemail)
	{
    	$this->smarty->assign('content',$content);
    	$content = $this->smarty->fetch('email/default.tpl');
    
		$this->mail->IsSMTP();

		$this->mail->SMTPAuth = true;

		$this->mail->Host = 'smtp.yandex.com';

		$this->mail->Port = 465;

    	$this->mail->SMTPSecure = 'ssl';	
    
		$this->mail->Username = 'torque@canguler.me';

		$this->mail->Password = 'torque12345';

		$this->mail->SetFrom($this->mail->Username, 'Torque');

		$this->mail->AddAddress($sendemail, '');

		$this->mail->CharSet = 'UTF-8';

		$this->mail->Subject = $subject;

		$this->mail->MsgHTML($content);

		if($this->mail->Send()) {

    		return true;

		} else {

    		return false;

		}
       
	}

	

}


?>