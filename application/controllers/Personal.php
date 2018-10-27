<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personal extends CI_Controller{
	
	public $controlador='1';

	public function index(){
		$session=$this->session->userdata('logged');
		$cargo=$this->session->userdata('cargo');
		$permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
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
	
	public function nuevo(){
		$session=$this->session->userdata('logged');
		$cargo=$this->session->userdata('cargo');
		$permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
		//sesion y permisos
		if($session==true && $permiso != 0){
		    $info['MyNombre']=$this->session->userdata('username');
		    $data['locales']=$this->DataModel->LocalSelectList();
		    $data['cargos']=$this->DataModel->cargosSelectList();
		    $this->load->view('Layouts/header');
		    $this->load->view('Layouts/menu',$info);
		    $this->load->view('Personal/nuevo',$data);
		    $this->load->view('Layouts/footer');
		}else{
		    redirect(base_url());
		}
	}
	public function agregaPersonal(){
		$session=$this->session->userdata('logged');
		$cargo=$this->session->userdata('cargo');
		$permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
		//sesion y permisos
		if($session==true && $permiso != 0){
		    $datos=array(
			    'nombre' => $this->input->post('nombre'),
			    'descripcion' => $this->input->post('descripcion'),
			    'estado' => $this->input->post('estado')
			);
		    $this->DataModel->agregarUsuario($datos);
		    redirect(base_url()+"Personal/nuevo");
		}else{
		    redirect(base_url());
		}
	}
	public function actualiza($personal_id){
		$session=$this->session->userdata('logged');
		$cargo=$this->session->userdata('cargo');
		$permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
		//sesion y permisos
		if($session==true && $permiso != 0){
		    $data['locales']=$this->DataModel->LocalSelectList();
		    $data['cargos']=$this->DataModel->cargosSelectList();
		    $info['MyNombre']=$this->session->userdata('username');
		    $data['personal']=$this->session->listaUsuarioById($personal_id);
		    $this->load->view('Layouts/header');
		    $this->load->view('Layouts/menu',$info);
		    $this->load->view('Personal/actualiza',$data);
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
		    $idUsr =$this->input->post('idUsuario');
                    $datos=array(
			    'nombres' => $this->input->post('nombres'),
			    'idCargo' => $this->input->post('cargo'),
			    'idLocal' => $this->input->post('local'),
			    'email' => $this->input->post('email'),
			    'telefono' => $this->input->post('telefono'),
			    'estado' =>  $this->input->post('estado')
                    );
                    $this->DataModel->actualizaUsuario($idUsr,$datos);
		    redirect(base_url()+"Personal/");
		}else{
		    redirect(base_url());
		}
	}
	


}

