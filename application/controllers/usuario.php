<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function agregar()
	{
		
		$this->load->view('pas_agregar.php');	//contenido
		
	}	
	
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

	public function indexMenu()
	{		
		$this->load->view('menu_user');	//contenido		
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

	/*public function test_pasajero()
	{
		$lista=$this->pasajero_model->lista();
		$data['pasajeros']=$lista;
		

		$this->load->view('inc_head.php');		//archivos de cabecera
		$this->load->view('inc_menu.php');		//archivos de cabecera
		$this->load->view('test_pas',$data);		//contenido
		$this->load->view('inc_footer.php');	//archivos del footer
	}	

	

	public function agregar()
	{
		$this->load->view('inc_head.php');		//archivos de cabecera
		$this->load->view('pas_agregar');	//contenido
		$this->load->view('inc_footer.php');	//archivos del footer
	}

	public function agregarbd()
	{
		$data['nombres']=$_POST['nombres'];
		$data['primerAp']=$_POST['primerAp'];
		$data['segundoAp']=$_POST['segundoAp'];
		$data['celular']=$_POST['celular'];
		$data['direccion']=$_POST['direccion'];		

		$this->pasajero_model->agregarPasajero($data);

		redirect('pasajero/index','refresh');
	}

	public function eliminarbd()
	{
		$idPasajero=$_POST['idpasajero'];
		$this->pasajero_model->eliminarPasajero($idPasajero);
		redirect('pasajero/index','refresh');
	}

	public function subirfoto()
	{
		$data['idpasajero']=$_POST['idpasajero'];
		
		$this->load->view('inc_head.php');		//archivos de cabecera
		$this->load->view('subirform',$data);	//contenido
		$this->load->view('inc_footer.php');	//archivos del footer
	}

	public function subir()
	{
		$idPasajero=$_POST['idpasajero'];
		$nombrearchivo=$idPasajero.".jpg";

		//Ruta donde se gaurdan los ficheros
		$config['upload_path']='./uploads/pasajeros';
		//Nombre del archivos
		$config['file_name']=$nombrearchivo;

		//Remplazar los archivos
		$direccion="./uploads/pasajeros/".$nombrearchivo;
		unlink($direccion);

		//Tipos de archivos permitidos
		$config['allowed_types']='gif|jpg|png'; //'gif|jpg|png'
		$this->load->library('upload',$config);

		if(!$this->upload->do_upload())
		{
			//si hay algun error, pasaremos a la vista
			$data['error']=$this->upload->display_errors();
		}
		else
		{
			$data['foto']=$nombrearchivo;
			$this->pasajero_model->modificarPasajero($idPasajero,$data);
			$this->upload->data();
		}

		redirect('pasajero/test_pasajero','refresh');
	}*/
}
