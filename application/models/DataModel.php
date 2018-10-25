<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class DataModel extends CI_Model
{
    function __construct()
    {
        parent::__construct(); // construct the Model class
    }

    //sessiones
    public function session($user,$pass){
        $query = $this->db->query("SELECT * FROM TB_USUARIOS WHERE email='$user' AND pws='$pass' AND estado=1  LIMIT 1");
        if($query->num_rows() == 0){
        return null;
        }else{
            //genera tokenDinamico
            $token=$this->generatePass(20);
        
            //inserta tokenDinamico y recupera info sesion Json
            foreach ($query->result() as $row){
                $this->db->query("update TB_USUARIOS set dinamico='$token' where id='$row->id' ");
                $data = array(
                  'id' => $row->id,
                  'username'  => $row->nombres,
                  'token' => $token,
                  'cargo' => $row->idCargo,
                  'logged' => true
                );
            }
            return $data;
        } 
    }
    public function veryfyPermission($cargo,$controlador){
        $query = $this->db->query("SELECT COUNT(*) FROM TB_CARGO_PERMISO WHERE idCargo='$cargo' AND idPermiso='$controlador' ");
        return $query->result();
    }
    public function obtenerPermisos($cargo){
        $query = $this->db->query("SELECT pr.icono,pr.descripcion,pr.controlador FROM TB_CARGO_PERMISO cgpr INNER JOIN TB_PERMISOS pr on pr.id=cgpr.idPermiso WHERE cgpr.idCargo='$cargo' ");
        if($query->num_rows() == 0){
        return null;
        }else{
        return $query->result();
        }  
    }
    public function logout($id,$token){
        $query = $this->db->query("UPDATE TB_USUARIOS SET dinamico=null WHERE id='$id' AND dinamico='$token' ");
        return $query->result();
    }
    
    //Cargos
    public function cargosGroupList(){
        $query = $this->db->query("SELECT id,descripcion, (CASE WHEN estado = 1 THEN 'Activo' ELSE 'Inactivo'END) AS 'estado' FROM TB_CARGOS WHERE id > 2");
        if($query->num_rows() == 0){
        return null;
        }else{
        return $query->result();
        }  
    }
    public function cargosSelectList(){
        $query = $this->db->query("SELECT id,descripcion FROM TB_CARGOS WHERE estado='1' ");
        if($query->num_rows() == 0){
        return null;
        }else{
        return $query->result();
        }  
    }
    public function insertacargo($datos){
        $query = $this->db->insert('TB_CARGOS',$datos);
        if ($this->db->affected_rows() > 0)
        {
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function buscacargo($id){
        $query = $this->db->query("SELECT id,descripcion,estado as 'idEstado',(CASE WHEN estado = 1 THEN 'Activo' ELSE 'Inactivo'END) AS 'estado' FROM TB_CARGOS WHERE id='$id' ");
        if($query->num_rows() == 0){
        return null;
        }else{
        return $query->result();
        }  
    }
    public function actualizacargo($id,$datos){
        $this->db->where('id',$id);
        return $this->db->update('TB_CARGOS',$datos);
    }
    
    
    //locales
    public function LocalGroupList(){
        $query = $this->db->query("SELECT id,nombres,direccion,telefono, (CASE WHEN estado = 1 THEN 'Activo' ELSE 'Inactivo'END) AS 'estado' FROM TB_LOCALES");
        if($query->num_rows() == 0){
        return null;
        }else{
        return $query->result();
        }  
    }
    public function LocalSelectList(){
        $query = $this->db->query("SELECT id,nombres,direccion,telefono FROM TB_LOCALES WHERE estado='1' ");
        if($query->num_rows() == 0){
        return null;
        }else{
        return $query->result();
        }  
    }
    public function insertaLocal($datos){
        $query = $this->db->insert('TB_LOCALES',$datos);
        if ($this->db->affected_rows() > 0)
        {
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function buscaLoca($id){
        $query = $this->db->query("SELECT id,nombres,direccion,telefono,estado as 'idEstado',(CASE WHEN estado = 1 THEN 'Activo' ELSE 'Inactivo'END) AS 'estado' FROM TB_LOCALES WHERE id='$id' ");
        if($query->num_rows() == 0){
        return null;
        }else{
        return $query->result();
        }  
    }
    public function actualizaLocal($id,$datos){
        $this->db->where('id',$id);
        return $this->db->update('TB_LOCALES',$datos);
    }
    
    //insumos
    public function insumoGroupList(){
        $query = $this->db->query("SELECT id,nombre,descripcion, (CASE WHEN estado = 1 THEN 'Activo' ELSE 'Inactivo'END) AS 'estado' FROM TB_INSUMOS");
        if($query->num_rows() == 0){
        return null;
        }else{
        return $query->result();
        }  
    }
    public function insumoSelectList(){
        $query = $this->db->query("SELECT id,nombre,descripcion FROM TB_INSUMOS WHERE estado='1' ");
        if($query->num_rows() == 0){
        return null;
        }else{
        return $query->result();
        }  
    }
    public function insertaInsumo($datos){
        $query = $this->db->insert('TB_INSUMOS',$datos);
        if ($this->db->affected_rows() > 0)
        {
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function buscaInsumo($id){
        $query = $this->db->query("SELECT id,nombre,descripcion,estado as 'idEstado',(CASE WHEN estado = 1 THEN 'Activo' ELSE 'Inactivo'END) AS 'estado' FROM TB_INSUMOS WHERE id='$id' ");
        if($query->num_rows() == 0){
        return null;
        }else{
        return $query->result();
        }  
    }
    public function actualizaInsumo($id,$datos){
        $this->db->where('id',$id);
        return $this->db->update('TB_INSUMOS',$datos);
    }
    


}
