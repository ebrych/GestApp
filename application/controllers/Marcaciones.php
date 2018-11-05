<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Marcaciones extends CI_Controller{

    public $controlador='9';
    
    public function index(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $local =$this->session->userdata('id');
            $info['MyNombre']=$this->session->userdata('username');
            $data['personal']= $this->DataModel->listaPersonalByLocal($local);
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu',$info);
            $this->load->view('Marcaciones/index',$data);
            $this->load->view('Layouts/footer');	
        }else{
            redirect(base_url());
        }
    }
    
    public function agregarMarcacion($personal_id){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador)
        //sesion y permisos
        if($session==true && $permiso != 0){
            $hoy=date("Y-m-d");
            $busca=$this->DataModel->buscaAsistencia($personal_id,$hoy);
                if($busca==0){
                        //agrega asistencia
                        $data=array(
                            'idUsuario'=> $idUser,
                            'fecha'=> $hoy,
                            'entrada'=>date("H:i:s")
                        );
                        $this->DataModel->registrarAsistencia($data);
                }else{
                        //update asistencia
                        $data=array(
                            'salida' => date("H:i:s")
                        );
                        //$salida=date("H:i:s");
                        $this->DataModel->actualizaAsistencia($idUser,$hoy,$data);
                }
                redirect(base_url()."Marcaciones");
        }else{
            redirect(base_url());
        }
    }

}
