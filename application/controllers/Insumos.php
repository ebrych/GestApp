<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Insumos extends CI_Controller {

  public function index(){        
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $info['MyNombre']=$this->session->userdata('username');
            $data['insumos']= $this->DataModel->insumoGroupList();
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Insumos/index',$data);
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
            $this->load->view('Insumos/nuevo');
            $this->load->view('Layouts/footer');
        }else{
            redirect(base_url());
        }
  }
  
  public function agregarInsumo(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $datos=array(
                    'nombre' => $this->input->post('nombre'),
                    'descripcion' => $this->input->post('descripcion'),
                    'estado' => $this->input->post('estado')
                );
            $this->DataModel->insertaInsumo($datos);
            redirect(base_url()+"Insumos/nuevo");
        }else{
            redirect(base_url());
        }
  }
  
  public function actualiza(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $idInsumo = $this->input->post('insumoId');;
            $info['MyNombre']=$this->session->userdata('username');
            $data['cargo']=$this->DataModel->buscaInsumo($idInsumo);
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Insumos/actualiza',$data);
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
            $idInsumo=$this->input->post('idInsumo');
                $datos=array(
                    'nombre' => $this->input->post('nombre'),
                    'descripcion' => $this->input->post('descripcion'),
                    'estado' => $this->input->post('estado')
                );
            $this->DataModel->actualizaInsumo($idInsumo,$datos);
            redirect(base_url()+"Insumos");
        }else{
            redirect(base_url());
        }
  }
  

}
