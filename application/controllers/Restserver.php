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
}
