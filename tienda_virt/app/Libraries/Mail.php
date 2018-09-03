<?php
namespace App\Libraries;

use PHPMailer;
class Mail extends PHPMailer
{
    public function __construct($exceptions = false)
    {
        
        parent::__construct($exceptions);
        $this->isSMTP();
        $this->Host = ED_MAIL['Host']; 
        $this->SMTPAuth = ED_MAIL['SMTAuth'];                              
        $this->Username = ED_MAIL['Username'];                 
        $this->Password = ED_MAIL['Password'];                           
        $this->SMTPSecure =ED_MAIL['SMTPSecure'];                           
        $this->Port = ED_MAIL['Port'];

        $this->SMTPOptions =array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
    }
}