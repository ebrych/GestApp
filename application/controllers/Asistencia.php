<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Asistencia extends CI_Controller{

    public $controlador='10';
    
    public function index($fecha=null){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $fecha=$this->input->get('dateData');
            if($fecha==null){
                $fecha=date("Y-m-d");
            }
            $data['fecha']=$fecha; 
            $data['personal']= $this->DataModel->listarAsistenciadelDia($fecha);
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu');
            $this->load->view('Asistencia/index',$data);
            $this->load->view('Layouts/footer');	
        }else{
            redirect(base_url());
        }
    }
    

}
