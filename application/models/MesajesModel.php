<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MesajesModel extends CI_Model
{
    function __construct()
    {
        parent::__construct(); // construct the Model class
    }
    
   public function enviarMensaje($mailTo,$asunto,$mensaje){
        $config = array(
                 'protocol' => 'smtp',
                 'smtp_host' => 'smtp.live.com',
                 'smtp_port' => 465,
                 'smtp_user' => 'edificiotradiciones@hotmail.com',
                 'smtp_pass' => 'tradiciones2017',
                 'mailtype' => 'html',
                 'charset' => 'utf-8',
                 'newline' => "\r\n"
                 );
        $this->load->library('email',$config);
        $this->email->set_mailtype('html');
        $this->email->from('edificiotradiciones@hotmail.com');
        $this->email->to($mailTo);
        $this->email->subject($asunto);
        $this->email->message($mensaje);
        $this->email->send();
   }
    
    
    
}
