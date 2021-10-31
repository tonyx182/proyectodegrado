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
}
