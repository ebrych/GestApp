<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		$this->load->helper('url');
		$this->load->view('Layouts/header');
		$this->load->view('login');
		$this->load->view('Layouts/footer');
	}

	public function session(){
		$this->load->helper('url');
		$this->load->model('DataModel');
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
		$this->load->helper('url');
		$this->load->model('DataModel');
		$idUsr=$this->session->userdata('id');
		$token=$this->session->userdata('token');
		$this->DataModel->logout($idUsr,$token);
		$this->session->sess_destroy();
		redirect('http://'.base_url());
	}

	public function panel(){
		$this->load->helper('url');
		$this->load->model('DataModel');
		$session=$this->session->userdata('logged');
		if($session==true){
			$cargo=$this->session->userdata('cargo');
			$info['MyNombre']=$this->session->userdata('username');
			$data['Permisos']=$this->DataBaseModel->obtenerPermisos($cargo);
			$this->load->view('Layouts/header');
			$this->load->view('Layouts/menu',$info);
			$this->load->view('panel',$data);
			$this->load->view('Layouts/footer');	
		}else{
			redirect('http://'.base_url());
		}
	}

}
