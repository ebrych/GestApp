<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ReporteLocal extends CI_Controller{
    
    public $controlador='12';
    
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
            $dataFecha=EXPLODE("-",$fecha);
            $data['hoy']=$fecha;
            $data['locales']= $this->DataModel->listaLocalesReporte($dataFecha[1]);    
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu');
            $this->load->view('ReporteLocal/index',$data);
            $this->load->view('Layouts/footer');	
        }else{
            redirect(base_url());
        }
    }
    
    
    
    
}
