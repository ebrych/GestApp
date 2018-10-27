<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clientes extends CI_Controller{

  public function index(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $info['MyNombre']=$this->session->userdata('username');
            $data['clientes']= $this->DataModel->listGroupCliente();
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Clientes/index',$data);
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
            $this->load->view('Clientes/nuevo');
            $this->load->view('Layouts/footer');
        }else{
            redirect(base_url());
        }
  }
  public function agregaCliente(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $datos=array(
                    'nombres' => $this->input->post('nombre'),
                    'email' => $this->input->post('email'),
                    'telefono' => $this->input->post('telefono'),
                );
            $this->DataModel->insertaCliente($datos);
            redirect(base_url()+"Clientes/nuevo");
        }else{
            redirect(base_url());
        }
  }
  public function actualiza($cliente_id){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $info['MyNombre']=$this->session->userdata('username');
            $data['cliente']=$this->DataModel->buscaClienteById($cliente_id);
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Clientes/actualiza',$data);
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
                $idCliente=$this->input->post('idCliente');
                $datos=array(
                    'nombres' => $this->input->post('nombre'),
                    'email' => $this->input->post('email'),
                    'telefono' => $this->input->post('telefono'),
                );
                $data['datos']=$this->DataModel->actualizaClienteById($idCliente,$datos);
                
            $this->DataModel->actualizaInsumo($idInsumo,$datos);
            redirect(base_url()+"Clientes");
        }else{
            redirect(base_url());
        }
  }
  
}
