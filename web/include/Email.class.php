<?php


class Email {
    
    private $SMTPSecure = "ssl";
    private $host = "smtp.gmail.com";
    private $port = 465;
    private $username = "airlines.progra4@gmail.com";
    private $password = "progra4123";
    
    private $from = "airlines.progra4@gmail.com";
    private $fromName = "AirLines CR";
  
    
    public function __construct()
    {
        $this->mail = new PHPMailer();
        $this->mail->SMTPSecure  = $this->SMTPSecure;
        $this->mail->SMTPAuth = true;
        $this->mail->IsSMTP();
        $this->mail->Host = $this->host;
        $this->mail->Port = $this->port;
        $this->mail->Username = $this->username ;
        $this->mail->Password = $this->password;
        $this->mail->From = $this->from;
        $this->mail->FromName = $this->fromName;

    }
    
    public function send($subject, $message, $recipient, $recipientName){
        $this->mail->Subject = $subject;
        $this->mail->MsgHTML( $message );
        $this->mail->AddAddress( $recipient, $recipientName );
        $this->mail->IsHTML(true);

        $this->mail->Send();

    }
    
}

?>
