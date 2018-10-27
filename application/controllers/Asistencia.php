<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Asistencia extends CI_Controller{

    public $controlador='10';
    
    public function index(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $info['MyNombre']=$this->session->userdata('username');
            $date=$this->input->post('date');
            $data['personal']= $this->DataModel->listarAsistenciadelDia($date);
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Asistencia/index',$data);
            $this->load->view('Layouts/footer');	
        }else{
            redirect(base_url());
        }
    }
    

}
