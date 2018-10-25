<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Locales extends CI_Controller{
  
  public $controlador='2';
  
  public function index (){
    $this->load->helper('url');
    $this->load->model('DataModel');
    $session=$this->session->userdata('logged');
    $cargo=$this->session->userdata('cargo');
    $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
    //sesion y permisos
    if($session==true && $permiso != 0){
         $info['MyNombre']=$this->session->userdata('username');
         $data['locales']= $this->DataModel->LocalGroupList();
         $this->load->view('Layouts/header');
         $this->load->view('Layouts/menu',$info);
         $this->load->view('Locales/index',$data);
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
         $this->load->view('Locales/nuevo');
         $this->load->view('Layouts/footer');
    }else{
        redirect(base_url());
    }
  }
  
  public function agregarLocal(){
    $this->load->helper('url');
    $this->load->model('DataModel');
    $session=$this->session->userdata('logged');
    $cargo=$this->session->userdata('cargo');
    $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
       //sesion y permisos
       if($session==true && $permiso != 0){
            $datos=array(
                    'nombres' => $this->input->post('nombre'),
                    'direccion' => $this->input->post('direccion'),
                    'telefono' => $this->input->post('telefono'),
                    'estado' => $this->input->post('estado')
                );
            $this->DataModel->insertaLocal($datos);
            redirect(base_url()+"Locales/nuevo");
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
         $idLocal = $this->input->post('localId');
         $info['MyNombre']=$this->session->userdata('username');
         $data['local']=$this->DataModel->buscaLoca($idLocal);
         $this->load->view('Layouts/header');
         $this->load->view('Layouts/menu',$info);
         $this->load->view('Locales/actualiza',$data);
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
             $idLocal=$this->input->post('idLocal');
             $datos=array(
               'nombres' => $this->input->post('nombre'),
               'direccion' => $this->input->post('direccion'),
               'telefono' => $this->input->post('telefono'),
               'estado' => $this->input->post('estado')
            );
            $this->DataModel->actualizaLocal($idLocal,$datos);
            redirect(base_url()+"Locales");
        }else{
            redirect(base_url());
        }
  }


}
