<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reservas extends CI_Controller{
  
  public $controlador='8';
  
  
  public function index(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $info['MyNombre']=$this->session->userdata('username');
            $data['reservas']= $this->DataModel->listarReservas();
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Reservas/index',$data);
            $this->load->view('Layouts/footer');	
        }else{
            redirect(base_url());
        }
  }
  
  public function confirmReserva($reserva_id){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $this->DataModel->aceptaReserva($reserva_id);
            redirect(base_url()."Reservas");
        }else{
            redirect(base_url());
        }
  }
  
  public function cancelaReserva($reserva_id){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
                $data=array(
                    'estado' => 0
                );
                $this->DataModel->updateReserva($reserva_id,$data);
                redirect(base_url()."Reservas");
        }else{
            redirect(base_url());
        }
  }

}
