<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		//index.php/controlador/metodo/usisegment3
		//index.php/usuarios/index/2
		$data['msg']=$this->uri->segment(3);

		if($this->session->userdata('userName'))
		{
			redirect('login/panel','refresh');
		}
		else
		{
		//cargar un login form
		$this->load->view('inc_head.php');		//archivos de cabecera
		$this->load->view('loginform.php',$data);		//contenido
		$this->load->view('inc_footer.php');		//archivos del footer
		}		
	}	

	public function validarlogin()
	{
		$userName=$_POST['userName'];
		$password=md5($_POST['password']);

		$consulta=$this->users_model->validar($userName, $password);

		if($consulta->num_rows()>0)
		{
			foreach ($consulta->result() as $row)
			{
				//crear las variables de sesion
				$this->session->set_userdata('idUsuario',$row->idUsuario);
				$this->session->set_userdata('userName',$row->userName);
				$this->session->set_userdata('idRol',$row->idRol);
				redirect('login/panel','refresh');
			}
		}
		else
		{
			//sino redirigimos a index enviando 1 en el urisegment 3
			redirect('login/index/1','refresh');
		}
	}		

	public function panel()
	{
		if($this->session->userdata('userName'))
		{			
			if($this->session->userdata('idRol')=='1')
			{
				redirect('login/menuAdmin','refresh');
			}
			else if($this->session->userdata('idRol')=='2')
			{
				redirect('usuario/menuCliente','refresh');
			}	
			else
			{
				redirect('usuario/menuTaxista','refresh');
			}		
		}
		else
		{
			//sino redirigimos a index enviando 2 en el urisegment 3
			redirect('login/index/2','refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login/index/3','refresh');
	}		

	public function agregar()
	{
		$this->load->view('inc_head.php');		//archivos de cabecera
		$this->load->view('us_agregar.php');	//contenido
		$this->load->view('inc_footer.php');	//archivos del footer
	}		
	
}
