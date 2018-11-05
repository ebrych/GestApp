<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		$this->session->sess_destroy();
		$this->load->view('Layouts/headerLgn');
		$this->load->view('Login/index');
		$this->load->view('Layouts/footer');
	}

	public function session(){
		$user = $this->input->post('username');
		$pass= $this->input->post('password');
		$dtosSess=$this->DataModel->session($user,$pass);
		if($dtosSess==null){
			redirect(base_url());
		}else{
			$this->session->set_userdata($dtosSess);
			redirect(base_url().'Welcome/panel');
		}
	}
	
	public function logout(){
		$idUsr=$this->session->userdata('id');
		$token=$this->session->userdata('token');
		$this->DataModel->logout($idUsr,$token);
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function panel(){
		$session=$this->session->userdata('logged');
		if($session==true){
			$cargo=$this->session->userdata('cargo');
			$info['MyNombre']=$this->session->userdata('username');
			$data['permisos']=$this->DataModel->obtenerPermisos($cargo);
			$this->load->view('Layouts/header');
			$this->load->view('Layouts/menu',$info);
			$this->load->view('Panel/index',$data);
			$this->load->view('Layouts/footer');	
		}else{
			redirect(base_url());
		}
	}
	
	public function recuperaPass(){
		$idUsr=$this->session->userdata('id');
		$token=$this->session->userdata('token');
		$correo=$this->input->post('mail');
		$existe=$this->DataModel->buscaUserByMail($correo);
		
		redirect(base_url());
	}

}
