<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Marcaciones extends CI_Controller{

    public $controlador='9';
    
    public function index(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $local =$this->session->userdata('id');
            $info['MyNombre']=$this->session->userdata('username');
            $data['personal']= $this->DataModel->listaPersonalByLocal($local);
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Marcaciones/index',$data);
            $this->load->view('Layouts/footer');	
        }else{
            redirect(base_url());
        }
    }

}
