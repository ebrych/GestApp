<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function Permisos()
	{
		$id = $this->input->post('id');
        	$token =$this->input->post('token');
        	$cargo=$this->DataModel->obtenerCargo($id,$token);
        	$data['datos']=$this->DataModel->obtenerPermisos($cargo);
		$this->load->view('index',$data);
	}
	
	public function cuenta(){
	        $session=$this->session->userdata('logged');
		$cargo=$this->session->userdata('cargo');
		$permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
		//sesion y permisos
		if($session==true && $permiso != 0){
		    $data=array(
		    	'nombre'=>$this->session->userdata('username'),
			'mail' =>$this->session->userdata('correo')
		    );
		    $this->load->view('Layouts/header');
		    $this->load->view('Layouts/menu');
		    $this->load->view('Panel/cuenta',$data);
		    $this->load->view('Layouts/footer');	
		}else{
		    redirect(base_url());
		}
	}
	
	public function actualizaDato(){
		$session=$this->session->userdata('logged');
		$cargo=$this->session->userdata('cargo');
		$permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
		//sesion y permisos
		if($session==true && $permiso != 0){
		    $id=$this->session->userdata('id');
		    $newPass=$this->input->post('pass');
		    if($newPass==""){
			$data=array(
			   'nombres'=>$this->input->post();
			   'email'=>$this->input->post();
		    	);
		    }else{
		    	$data=array(
			   'nombres'=>$this->input->post();
			   'email'=>$this->input->post();
			   'pws'=>$newPass
		    	);
		    }
		    $this->DataModel->actualizaDatoAccount($id,$data);
		    //this para actualizar
		    redirect(base_url()."Panel");
		}else{
		    redirect(base_url());
		}
	}


}
