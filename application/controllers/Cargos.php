<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargos extends CI_Controller {

    public $controlador='4';
    
    
    public function index(){
        $this->load->helper('url');
        $this->load->model('DataModel');
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $info['MyNombre']=$this->session->userdata('username');
            $data['cargos']= $this->DataModel->cargosGroupList();
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Cargos/index',$data);
            $this->load->view('Layouts/footer');	
        }else{
            redirect(base_url());
        }
    }
    
    public function nuevo(){
        $this->load->helper('url');
        $this->load->model('DataModel');
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $info['MyNombre']=$this->session->userdata('username');
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Cargos/nuevo');
            $this->load->view('Layouts/footer');
        }else{
            redirect(base_url());
        }
    }
    
    public function agregarCargo(){
        $this->load->helper('url');
        $this->load->model('DataModel');
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $datos=array(
                'descripcion' => $this->input->post('descripcion'),
                'estado' => $this->input->post('estado')
            );
            $this->DataModel->insertacargo($datos);
            redirect(base_url()+"Cargos/nuevo");
        }else{
            redirect(base_url());
        }
    }
    
    public function actualiza(){
        $this->load->helper('url');
        $this->load->model('DataModel');
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $idCargo = $this->input->post('cargoId');
            $info['MyNombre']=$this->session->userdata('username');
            $data['cargo']=$this->DataModel->buscacargo($idCargo);
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Cargos/actualiza',$data);
            $this->load->view('Layouts/footer');
        }else{
            redirect(base_url());
        }
    }
    
    public function actualizaDato(){
        $this->load->helper('url');
        $this->load->model('DataModel');
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $idCargo=$this->input->post('idCargo');
            $datos=array(
                'descripcion' => $this->input->post('descripcion'),
                'estado' => $this->input->post('estado')
            );
            $this->DataModel->actualizacargo($idCargo,$datos);
            redirect(base_url()+"Cargos");
        }else{
            redirect(base_url());
        }
    }
    

}
    
