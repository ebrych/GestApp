<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personal extends CI_Controller{

    public $controlador='1';

    public function index(){
	$this->load->helper('url');
	$this->load->model('DataModel');
	$session=$this->session->userdata('logged');
	$cargo=$this->session->userdata('cargo');
	$permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
	//sesion y permisos
	if($session==true && $permiso != 0){
		$info['MyNombre']=$this->session->userdata('username');
		$data['personal']= $this->DataModel->listaPersonal();
		$this->load->view('Layouts/header');
		$this->load->view('Layouts/menu',$info);
		$this->load->view('Personal/index',$data);
		$this->load->view('Layouts/footer');	
	}else{
		redirect('http://'.base_url());
	}
    }


}



/*
$cargo=$this->session->userdata('cargo');
	$permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
	//sesion y permisos
	if($session==true && $permiso != 0){

	}
*/
