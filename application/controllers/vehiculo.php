<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculo extends CI_Controller {

	public function menuVehiculo()
	{
		$lista=$this->vehiculo_model->lista();
		$data['vehiculo']=$lista;
				
		$this->load->view('menu_admin_vehi',$data);	//contenido
		
	}	

	public function agregar()
	{
		$this->load->view('vehi_agregar'); //contenido			
	}

	public function agregarbd()
	{				
		$data['placa']=$_POST['placa'];	
		$data['marca']=$_POST['marca'];	
		$data['modelo']=$_POST['modelo'];	
		$data['anioModelo']=$_POST['anioModelo'];
		$data['color']=$_POST['color'];	
		$data['nroChasis']=$_POST['nroChasis'];		
		$data['nroMotor']=$_POST['nroMotor'];	
		$data['cilindradaMotor']=$_POST['cilindradaMotor'];	

		$this->vehiculo_model->agregarVehiculo($data);

		redirect('usuario/agregarTaxista','refresh');
	}		

	public function modificar()
	{
		$idVehiculo=$_POST['idVehiculo'];		
		$data['infovehiculo']=$this->vehiculo_model->recuperarVehiculo($idVehiculo);

		$this->load->view('inc_head.php');	
		$this->load->view('vehi_modificar_admin',$data);	//contenido		
		$this->load->view('inc_footer.php');
	}

	public function modificarbd()
	{
		$idVehiculo=$_POST['idVehiculo'];
		$data['placa']=$_POST['placa'];
		$data['marca']=$_POST['marca'];
		$data['modelo']=$_POST['modelo'];
		$data['anioModelo']=$_POST['anioModelo'];
		$data['color']=$_POST['color'];
		$data['nroChasis']=$_POST['nroChasis'];
		$data['nroMotor']=$_POST['nroMotor'];
		$data['cilindradaMotor']=$_POST['cilindradaMotor'];
		
		$this->vehiculo_model->modificarVehiculo($idVehiculo,$data);

		redirect('vehiculo/index','refresh');
	}
}
