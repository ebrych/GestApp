<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Web extends CI_Controller{
    
    public $controlador='13';
    
    public function servicio_getData(){
          $data['datos']= $this->DataModel->infoWeb();
          $this->load->view('Web/servicios',$data);
     }
     public function servicio_getLocales(){
          $data['datos']= $this->DataModel->LocalSelectList();
          $this->load->view('Web/servicios',$data);
     }
     public function servicio_getContacto(){
          $data['datos']= $this->DataModel->contactoWeb(1);
          $this->load->view('Web/servicios',$data);
     }
  
  
     //admin
     public function index(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $data['informacion']= $this->DataModel->infoWeb();
            $data['contacto']=$this->DataModel->contactoWeb(1);
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu');
            $this->load->view('Web/index',$data);
            $this->load->view('Layouts/footer');	
        }else{
            redirect(base_url());
        }
     }
     public function nuevaEntrada(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu');
            $this->load->view('Web/entrada');
            $this->load->view('Layouts/footer');	
        }else{
            redirect(base_url());
        }
     }
     public function agregarInformacion(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
           $datos=array(
             'titulo' => $this->input->post('titulo'),
             'descripcion' => $this->input->post('descripcion'),
             'orden ' =>  $this->input->post('orden')
           );
           $this->DataModel->agregarInfoWeb($datos);
           redirect(base_url()."Web");
        }else{
            redirect(base_url());
        }
     }
     public function eliminarInformacion($info_id){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
           $this->DataModel->deleteInfoWeb($info_id);
           redirect(base_url()."Web/informacion");
        }else{
            redirect(base_url());
        }
     }
     
     public function actualizaContacto(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $id='1';
            $datos=array(
                    'numero' => $this->input->post('numero'),
                    'mail' => $this->input->post('mail'),
                    'facebook  ' =>  $this->input->post('facebook'),
                    'instagram  ' =>  $this->input->post('instagram')
             );
             $this->DataModel->updateContactoWeb($id,$datos);
             redirect(base_url()."Web/informacion");
        }else{
            redirect(base_url());
        }
     }
  
  
  
}
