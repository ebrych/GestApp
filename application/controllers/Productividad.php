<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Productividad extends CI_Controller{
    public $controlador='11';
    
    public function index(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $hoy=$this->input->post('date');
            $dataFecha=EXPLODE("-",$hoy);
            $data['personal']= $this->DataModel->listaTrabajadorReporte($dataFecha[1]);  
            $info['MyNombre']=$this->session->userdata('username');    
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Productividad/index',$data);
            $this->load->view('Layouts/footer');	
        }else{
            redirect(base_url());
        }
    }
    
}
