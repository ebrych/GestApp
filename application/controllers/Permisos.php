<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Permisos extends CI_Controller{

  public function index(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $info['MyNombre']=$this->session->userdata('username');
            $data['cargos']= $this->DataModel->cargosGroupList();
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Permisos/index',$data);
            $this->load->view('Layouts/footer');	
        }else{
            redirect(base_url());
        }
  }
  
  public function permisoCargo($cargo_id){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $info['MyNombre']=$this->session->userdata('username');
            $data['miCargo'] = $cargo_id;
            $data['misPermisos']= $this->DataModel->listaPermisosById($cargo_id);
            $data['permisos']=$this->DataModel->listarPermisos();
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Permisos/permisoCargo',$data);
            $this->load->view('Layouts/footer');	
        }else{
            redirect(base_url());
        }
  }
  
  public function agregaPermiso(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $crgo=$this->input->post('cargo');
            $prms=$this->input->post('permiso');
            $data=array(
                        'idCargo' => $crgo,
                        'idPermiso' => $prms
            );
            $this->DataModel->insertaPermiso($data);
            redirect(base_url()+"Permisos/permisoCargo/"+$crgo);
        }else{
            redirect(base_url());
        }
  }
  
  public function eliminaPermiso($cargo_id,$permiso_id){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $data['datos']= $this->DataModel->eliminaPermiso($cargo_id,$permiso_id);
            redirect(base_url()+"Permisos/permisoCargo/"+$crgo);
        }else{
            redirect(base_url());
        }
  }
  
  
  
}
