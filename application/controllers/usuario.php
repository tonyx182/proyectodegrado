<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {		

	public function listaAdmin()
	{
		$lista=$this->users_model->listaAdmin();
		$data['usuario']=$lista;
				
		$this->load->view('menu_admin_admin',$data);	//contenido
		
	}

	public function listaClientes()
	{
		$lista=$this->users_model->listaClientes();
		$data['usuario']=$lista;	
		
		$this->load->view('menu_admin_cliente',$data);	//contenido
		
	}

	public function listaTaxistas()
	{
		$lista=$this->users_model->listaTaxistas();
		$data['usuario']=$lista;
				
		$this->load->view('menu_admin_taxista',$data);	//contenido
		
	}	

	public function menuCliente()
	{		
		$this->load->view('menu_cliente');	//contenido		
	}	

	public function agregarCliente()
	{
		
		$this->load->view('cli_agregar.php');	//contenido
		
	}		

	public function agregarUsuariobd()
	{		
		$nombres = $_POST['nombres'];
		$primerApellido = $_POST['primerApellido'];
		$segundoApellido = $_POST['segundoApellido'];
		$celular = $_POST['celular'];
		$password = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz", 15)), 0, 15);
		$userName = substr($nombres, 0, 1).substr($primerApellido, 0, 1).substr($segundoApellido, 0, 1).substr($celular, 0, 4);
		$data['userName']=$userName;
		$data['password']=md5($password); 
		$data['nombres']=$nombres;
		$data['primerApellido']=$primerApellido;
		$data['segundoApellido']=$segundoApellido;
		$data['ci']=$_POST['ci'];
		$data['sexo']=$_POST['sexo'];
		$data['fechaNacimiento']=$_POST['fechaNacimiento'];
		$data['celular']=$celular;
		$data['direccion']=$_POST['direccion'];	
		$data['idRol']="2";

		$this->users_model->agregarUsuario($data);		

		redirect('login/index','refresh');
	}

	public function menuAdmin()	{				
		$this->load->view('menu_admin.php');				
	}	

	public function agregarAdmin()	{		
		$this->load->view('admin_agregar.php');	//contenido		
	}	

	public function agregarAdminbd()
	{		
		$nombres = $_POST['nombres'];
		$primerApellido = $_POST['primerApellido'];
		$segundoApellido = $_POST['segundoApellido'];
		$celular = $_POST['celular'];
		$password = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz", 15)), 0, 15);
		$userName = substr($nombres, 0, 1).substr($primerApellido, 0, 1).substr($segundoApellido, 0, 1).substr($celular, 0, 4);
		$data['userName']=$userName;
		$data['password']=md5($password); 
		$data['nombres']=$nombres;
		$data['primerApellido']=$primerApellido;
		$data['segundoApellido']=$segundoApellido;
		$data['ci']=$_POST['ci'];
		$data['sexo']=$_POST['sexo'];
		$data['fechaNacimiento']=$_POST['fechaNacimiento'];
		$data['celular']=$celular;
		$data['direccion']=$_POST['direccion'];	
		$data['idRol']="1";

		$this->users_model->agregarUsuario($data);		

		redirect('usuario/listaAdmin','refresh');
	}

	public function menuTaxista() {		
		$this->load->view('menu_taxista');	//contenido		
	}	

	public function agregarTaxista()	{		
		$this->load->view('tax_agregar'); //contenido		
	}

	public function agregarTaxistabd()
	{		
		$nombres = $_POST['nombres'];
		$primerApellido = $_POST['primerApellido'];
		$segundoApellido = $_POST['segundoApellido'];
		$celular = $_POST['celular'];
		$password = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz", 15)), 0, 15);
		$userName = substr($nombres, 0, 1).substr($primerApellido, 0, 1).substr($segundoApellido, 0, 1).substr($celular, 0, 4);
		$data['userName']=$userName;
		$data['password']=md5($password); 
		$data['nombres']=$nombres;
		$data['primerApellido']=$primerApellido;
		$data['segundoApellido']=$segundoApellido;
		$data['ci']=$_POST['ci'];
		$data['nroLicencia']=$_POST['nroLicencia'];
		$data['sexo']=$_POST['sexo'];
		$data['fechaNacimiento']=$_POST['fechaNacimiento'];
		$data['celular']=$celular;
		$data['direccion']=$_POST['direccion'];	
		$data['idRol']="3";

		$this->users_model->agregarUsuario($data);		

		redirect('usuario/listaTaxistas','refresh');
	}

	public function modificar()
	{
		$idLogin=$this->session->userdata('idLogin');
		$data['infopasajero']=$this->pasajero_model->recuperarPasajero($idLogin);
		$data['infologin']=$this->login_model->recuperarLogin($idLogin);

		$this->load->view('pas_modificar',$data);	//contenido		
	}	

	public function modificarbd()
	{
		$idLogin=$_POST['idLogin'];
		$data['nombres']=$_POST['nombres'];
		$data['primerApellido']=$_POST['primerAp'];
		$data['segundoApellido']=$_POST['segundoAp'];
		$data['celular']=$_POST['celular'];
		$data['direccion']=$_POST['direccion'];		
		
		$this->pasajero_model->modificarPasajero($idLogin,$data);	

		$idLogin=$_POST['idLogin'];
		$data2['email']=$_POST['email'];
		$data2['password']=md5($_POST['password']);	
		$data2['fechaModificacion']=CURRENT_TIMESTAMP;	

		$this->login_model->modificarLogin(idLogin,$data2);
		
		

		redirect('pasajero/indexMenu','refresh');
	}	

	public function inhabilitarbd()
	{
		$idUsuario=$_POST['idLogin'];
		$data['estado']="0";
		$this->pasajero_model->inhabilitarPasajero($idUsuario,$data);
		redirect('pasajero/index','refresh');
	}
	
}
