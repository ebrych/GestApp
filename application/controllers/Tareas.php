<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tareas extends CI_Controller{

    public $controlador='7';
    
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
            $data['tareas']= $this->DataModel->listarTareas($fecha);
            $data['hoy']=$fecha;
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu');
            $this->load->view('Tareas/index',$data);
            $this->load->view('Layouts/footer');	
        }else{
            redirect(base_url());
        }
    }
    
    public function nuevo(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu');
            $this->load->view('Tareas/nuevo');
            $this->load->view('Layouts/footer');
        }else{
            redirect(base_url());
        }
    }
    
    public function agregarTarea(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
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
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $data['misServicio']=$this->DataModel->buscaServiciosTareaById($tarea_id);
            $data['servicios']=$this->DataModel->selectListServicio();
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu');
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
