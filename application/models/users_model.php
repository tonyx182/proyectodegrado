<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users_model extends CI_Model {

	public $table = 'usuario';

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function validar($userName, $password)
	{

		$this->db->select();
		$this->db->from($this->table);
		$this->db->where('userName',$userName);
		$this->db->where('password',$password);
		$this->db->where('estado',"1");
		return $this->db->get();

		//$query="SELECT * FROM usuarios WHERE login='".$login."' AND password='".$password."'";
		//return $this->db->query($query);
	}	

	public function lista()	{
		$this->db->select();
		$this->db->from($this->table);		
		$query = $this->db->get();

		return $query->result();
	}	

	public function listaAdmin() {
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('idRol',"1");
		return $this->db->get();
	}

	public function listaClientes()	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('idRol',"2");
		return $this->db->get();
	}

	public function listaTaxistas()	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('idRol',"3");
		return $this->db->get();
	}

	public function recuperarUsuarioAdmin($idUsuario)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('idUsuario',$idUsuario);
		$this->db->where('idRol',"1");
		return $this->db->get();
	}	

	public function recuperarUsuarioCliente($idUsuario)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('idUsuario',$idUsuario);
		$this->db->where('idRol',"2");
		return $this->db->get();
	}	

	public function modificarUsuario($idUsuario,$data)
	{
		$this->db->where('idUsuario',$idUsuario);		
		$this->db->update('usuario',$data);
	}		

	public function agregarUsuario($data)
	{				
		$this->db->insert('usuario',$data);
	}

	public function eliminarUsuario($idUsuario)
	{
		$this->db->where('idUsuario',$idUsuario);
		$this->db->delete('usuario');
	}
	
	public function inhabilitarUsuario($idUsuario,$data)
	{
		$this->db->where('idUsuario',$idUsuario);
		$this->db->update('usuario',$data);
	}	
}
