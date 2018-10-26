<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Servicios extends CI_Controller{
    public $controlador='3';
    
     public function index(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $info['MyNombre']=$this->session->userdata('username');
            $data['cargos']= $this->DataModel->listarServicios();
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Servicios/index',$data);
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
            $data['tipoPrecio']= $this->DataModel->listaTipoPrecio();
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Servicios/nuevo');
            $this->load->view('Layouts/footer');
        }else{
            redirect(base_url());
        }
    }
    
    public function agregaServicio(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
                $datos=array(
                    'descripcion' => $this->input->post('descripcion'),
                    'idCategoriaPrecio' => $this->input->post('categoria'),
                    'costo' => $this->input->post('costo'),
                    'estado' => $this->input->post('estado')
                );
                $this->DataModel->insertaServicio($datos);
                redirect(base_url()+"Servicios/nuevo");
        }else{
            redirect(base_url());
        }
    }
    
    public function actualiza($servicio_id){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $idCargo = $this->input->post('cargoId');
            $info['MyNombre']=$this->session->userdata('username');
            $data['servicio']=$this->DataModel->buscaServicioById($servicio_id);
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Servicios/actualiza',$data);
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
            $idServicio=$this->input->post('idServicio');
                $datos=array(
                    'descripcion' => $this->input->post('descripcion'),
                    'idCategoriaPrecio' => $this->input->post('categoria'),
                    'costo' => $this->input->post('costo'),
                    'estado' => $this->input->post('estado')
                );
            $this->DataModel->actualizaServicio($idServicio,$datos);
            redirect(base_url()+"Servicios");
        }else{
            redirect(base_url());
        }
    }
    
    
    
    
}
