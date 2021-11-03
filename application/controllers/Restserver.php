<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Restserver extends REST_Controller {

	public function __construct() {
        parent::__construct();
		
        $this->load->database();
        $this->load->model('users_model');
    }
	
	public function users_get() {		
		$this->response($this->users_model->lista());
	}

	public function test_get() {
		$array = array("Hola", "Mundo", "CodeIgniter");
		$this->response($array);
	}

	public function rand_get() {
		$nombres = "Luis Antonio";
		$primerApellido = "Corrales";
		$segundoApellido = "Albarracin";
		$celular = "70782931";
		
		$pF = substr($nombres, 0, 1).substr($primerApellido, 0, 1).substr($segundoApellido, 0, 1).substr($celular, 0, 4);

		$s = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz", 15)), 0, 15);
		
		$this->response($s);
	}

	public function last_get() {
		$idUsuario=$this->db->insert_id();
		$this->response($this->users_model->recuperarUsuarioCliente("5"));
	}

	public function login_post() {
		//get the post data
		$userName = $this->post('userName');
		$password = $this->post('password');

		//validate the post data
		if(!empty($userName) && !empty($password)) {
			//check if any user exists whit the given credentials
			$con['returnType'] = 'single';
			$con['conditions'] = array(
				'userName' => $userName,
				'password' => md5($password),
				'estado' => 1
			);
			$user = $this->users_model->getRows($con);

			if($user) {
				//set the response and exit
				$this->response([
					'status' => TRUE,
					'message' => 'Inicio de Sesión Existosa.',
					'data' => $user
				], REST_Controller::HTTP_OK);
			}else {
				//set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response("Nombre de Usuario o Contaseña Incorrectos", REST_Controller::HTTP_BAD_REQUEST);
			}
		}else {
			//set the response and exit
			$this->response("Introduzca un nombre de usuario y contraseña", REST_Controller::HTTP_BAD_REQUEST);
		}
	}
}
