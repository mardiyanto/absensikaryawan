<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Beranda extends CI_Controller
{
	public $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(['url', 'language']);
	}


	public function index()
	{
			$this->load->view('melebu/index', $this->data);
	}

}
