<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tareas extends CI_Controller{

    public $controlador='7';
    
    public function index($fecha=null){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $fecha=$this->input->get('dateData');
            if($fecha==null){
                $fecha=date("Y-m-d");
            }
            $data['tareas']= $this->DataModel->listarTareas($fecha);
            $data['hoy']=$fecha;
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu');
            $this->load->view('Tareas/index',$data);
            $this->load->view('Layouts/footer');	
        }else{
            redirect(base_url());
        }
    }
    
    public function nuevo(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $data['clientes']=$this->DataModel->listSelectCliente();
            $data['hoy']=date("Y-m-d");
            $data['hora']=date("H:i:s");
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu');
            $this->load->view('Tareas/nuevo',$data);
            $this->load->view('Layouts/footer');
        }else{
            redirect(base_url());
        }
    }
    
    public function agregarTarea(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $id=$this->session->userdata('id');
            $datos=array(
                    'idLocal' => $this->DataModel->obtenerLocal($id),
                    'idCliente' => $this->input->post('cliente'),
                    'fecha' => $this->input->post('fecha'),
                    'hora' => $this->input->post('hora'),
                    'estado' => $this->input->post('estado')
            );
            $this->DataModel->insertaTarea($datos);
            redirect(base_url()."Tareas");
        }else{
            redirect(base_url());
        }
    }
    
    public function asignaServicio($tarea_id,$tarea_fecha,$tarea_cli){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $data['misServicio']=$this->DataModel->buscaServiciosTareaById($tarea_id);
            $data['servicios']=$this->DataModel->selectListServicio();
            $data['cliente']=str_replace('%20',' ',$tarea_cli);
            $data['fecha']=$tarea_fecha;
            $data['tareaId']=$tarea_id;
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu');
            $this->load->view('Tareas/servicios',$data);
            $this->load->view('Layouts/footer');
        }else{
            redirect(base_url());
        }
    }
    public function agregarServicioTarea(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $idTarea=$this->input->post('idtarea');
            $cliente=$this->input->post('cliente');
            $fecha=$this->input->post('fecha');
            $servicio=$this->input->post('idservicio');
            $datos=array(
                'idTarea'=>$idTarea,
                'idServicio'=>$servicio,
                'valor' =>$this->DataModel->obtenerValorServicio($servicio)
            );
            $this->DataModel->insertaServiciosTarea($datos);
            redirect(base_url()."Tareas/asignaServicio/".$idTarea."/".$fecha."/".$cliente);

        }else{
            redirect(base_url());
        }
    }
    public function eliminaServicioTarea($tarea_id,$servicio_id,$tarea_fecha,$tarea_cli){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $this->DataModel->eliminaServicioTarea($tarea_id,$servicio_id);
            redirect(base_url()."Tareas/asignaServicio/".$tarea_id."/".$tarea_fecha."/".$tarea_cli);
        }else{
            redirect(base_url());
        }
    }



    public function asignaPersonalTarea($tarea_id,$tarea_fecha,$tarea_cli){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $id=$this->session->userdata('id');
            $local=$this->DataModel->obtenerLocal($id);
            $data['personal']=$this->DataModel->listarTrabajadores($local);
            $data['misPersonal']=$this->DataModel->listarTrabajadoresDeTarea($tarea_id);
            $data['cliente']=str_replace('%20',' ',$tarea_cli);
            $data['fecha']=$tarea_fecha;
            $data['tareaId']=$tarea_id;
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu');
            $this->load->view('Tareas/personal',$data);
            $this->load->view('Layouts/footer');
        }else{
            redirect(base_url());
        }
    }
    public function agregaPersonalTarea(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $idTarea=$this->input->post('idtarea');
            $cliente=$this->input->post('cliente');
            $fecha=$this->input->post('fecha');
            $personal=$this->input->post('idpersonal');
            $datos=array(
                'idTarea' => $idTarea,
                'idUsuario' => $personal
            );
            $this->DataModel->agregaTrabajadorToTarea($datos);
            redirect(base_url()."Tareas/asignaPersonalTarea/".$idTarea."/".$fecha."/".$cliente);

        }else{
            redirect(base_url());
        }
    }
    public function eliminaPersonalTarea($tarea_id,$personal_id,$tarea_fecha,$tarea_cli){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $this->DataModel->eliminaTrabajadorDeTarea($tarea_id,$personal_id);
            redirect(base_url()."Tareas/asignaPersonalTarea/".$tarea_id."/".$tarea_fecha."/".$tarea_cli);
        }else{
            redirect(base_url());
        }
    }

    public function finalizaTarea($tarea_id,$fecha_tarea){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $data['resumen']=$this->DataModel->resumenTotalTarea($tarea_id);
            $data['fecha']=$fecha_tarea;
            $data['tarea']=$tarea_id;
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu');
            $this->load->view('Tareas/finaliza',$data);
            $this->load->view('Layouts/footer');
        }else{
            redirect(base_url());
        }
    }

    public function cierraTarea(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $fecha=$this->input->post('fecha');
            $tarea=$this->input->post('idTarea');
            $datos=array(
                'estado' => 2
            );
            $this->DataModel->updateTarea($tarea,$datos);
            redirect(base_url()."Tareas/index?dateData=".$fecha);
        }else{
            redirect(base_url());
        }
    }

    public function comprobante($tarea_id,$fecha_tarea){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $data['fecha']=$fecha_tarea;
            $data['tarea']=$tarea_id;
            $boleta=$this->DataModel->buscarDatosBoleta($tarea_id);
            $this->load->view('Layouts/header');
            $this->load->view('Layouts/menu');
            if($boleta!=null){
                $data['boleta']=$boleta;
                $data['resumen']=$this->DataModel->resumenTotalTarea($tarea_id);
                $data['totales']=$this->DataModel->montoTotalTarea($tarea_id);
                $this->load->view('Tareas/comprobante',$data);
            }else{
                $this->load->view('Tareas/ingresoComrpobante',$data);
            }
            
            $this->load->view('Layouts/footer');
        }else{
            redirect(base_url());
        }
    }

    public function agregarComprobante(){
        $session=$this->session->userdata('logged');
        $cargo=$this->session->userdata('cargo');
        $permiso=$this->DataModel->veryfyPermission($cargo,$this->controlador);
        //sesion y permisos
        if($session==true && $permiso != 0){
            $fecha=$this->input->post('fechatarea');
            $tarea=$this->input->post('idtarea');
            $serie=$this->input->post('serie');
            $numero=$this->input->post('numero');
            $existe=$this->DataModel->buscaBoleta($tarea);
            if($existe == 0){
                $datos=array(
                    'serie'=>$serie,
                    'numero'=>$numero,
                    'idTarea'=>$tarea
                );
                $this->DataModel->insertaBoleta($datos);
            }
            redirect(base_url()."Tareas/comprobante/".$tarea."/".$fecha);
        }else{
            redirect(base_url());
        }
    }
    





    
    
    
    
    
    

}
