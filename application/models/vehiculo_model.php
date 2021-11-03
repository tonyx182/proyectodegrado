<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculo_model extends CI_Model {

	public function lista()
	{
		$this->db->select('*');
		$this->db->from('vehiculo');
		$this->db->join('usuario', 'usuario.idVehiculo = vehiculo.idVehiculo');		
		return $this->db->get();
	}	

	public function ultimoVehiculo()
	{
		$this->db->select_max('idVehiculo');
		$query = $this->db->get('vehiculo');
		return $query;
	}	

	public function recuperarVehiculo($idVehiculo)
	{
		$this->db->select('*');
		$this->db->from('vehiculo');
		$this->db->where('idVehiculo',$idVehiculo);
		return $this->db->get();
	}	

	public function modificarVehiculo($idVehiculo,$data)
	{
		$this->db->where('idVehiculo',$idVehiculo);
		$this->db->update('vehiculo',$data);
	}		

	public function agregarVehiculo($data)
	{		
		$this->db->insert('vehiculo',$data);
	}

	public function inhabilitarConductor($idConductor,$data)
	{
		$this->db->where('idLogin',$idConductor);
		$this->db->update('login',$data);
	}	
}
