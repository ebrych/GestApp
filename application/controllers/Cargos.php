<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargos extends CI_Controller {

    public $controlador='4';
    
    
    public function index(){
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
            redirect(base_url()."Cargos/nuevo");
        }else{
            redirect(base_url());
        }
    }
    
    public function actualiza($cargo_id){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $info['MyNombre']=$this->session->userdata('username');
            $data['cargo']=$this->DataModel->buscacargo($cargo_id);
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Cargos/actualiza',$data);
            $this->load->view('Layouts/footer');
        }else{
            redirect(base_url());
        }
    }
    
    public function actualizaDato(){
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
            redirect(base_url()."Cargos");
        }else{
            redirect(base_url());
        }
    }
    
    public function permisos($cargo_id,$cargo_nombre){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $info['MyNombre']=$this->session->userdata('username');
            $data['cargoNombre']=$cargo_nombre;
            $data['misPermisos']=$this->DataModel->listaPermisosById($cargo_id);
            $data['permisos']= $this->DataModel->listarPermisos();
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Cargos/permisos',$data);
            $this->load->view('Layouts/footer');	
        }else{
            redirect(base_url());
        }
    }
    
    public function agregarPermiso(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $crgo=$this->input->post('cargo');
            $prms=$this->input->post('permiso');
            $data=array(
                        'idCargo' => $crgo,
                        'idPermiso' => $prms
                    );
            $this->DataModel->insertaPermiso($data);
            redirect(base_url()."Cargos/permisos".$cargo_id);
        }else{
            redirect(base_url());
        }
    }
    
    public function eliminaPermiso($cargo_id,$permiso_id){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
             $this->DataModel->eliminaPermiso($cargo_id,$permiso_id);
            redirect(base_url()."Cargos/permisos/".$cargo_id);
        }else{
            redirect(base_url());
        }
    }
    

}
    
