<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tareas extends CI_Controller{

    public $controlador='7';
    
    public function index(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $info['MyNombre']=$this->session->userdata('username');
            $date=$this->input->post('date');
            $data['tareas']= $this->DataModel->listarTareas($date);
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Tareas/index',$data);
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
            $this->load->view('Tareas/nuevo');
            $this->load->view('Layouts/footer');
        }else{
            redirect(base_url());
        }
    }
    
    public function agregarTarea(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $datos=array(
                    'idLocal' => $this->DataModel->obtenerLocal($id),
                    'idCliente' => $this->input->post('cliente'),
                    'fecha' => $this->input->post('fecha'),
                    'hora' => $this->input->post('hora'),
                    'estado' => $this->input->post('estado')
            );
            $this->DataModel->insertaTarea($datos);
            redirect(base_url()+"Tareas");
        }else{
            redirect(base_url());
        }
    }
    
    public function asignaServicio($tarea_id){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $info['MyNombre']=$this->session->userdata('username');
            $data['misServicio']=$this->DataModel->buscaServiciosTareaById($tarea_id);
            $data['servicios']=$this->DataModel->selectListServicio();
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Tareas/Servicio');
            $this->load->view('Layouts/footer');
        }else{
            redirect(base_url());
        }
    }
    public function agregaServicioTarea(){
    }
    public function eliminaServicioTarea(){
    }
    
    public function asignaPersonal(){
    }
    public function agregarPersonalTarea(){
    }
    public function eliminaPersonalTarea(){
    }
    
    public function pagoTarea(){
    }
    
    public function recibo(){
    }
    
    public function cancelar(){
    }
    
    
    
    
    

}
