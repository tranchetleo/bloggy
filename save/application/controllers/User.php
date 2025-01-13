<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
		// Appel du constructeur du parent
		parent::__construct();
		
		// Chargement de l'helper URL
		$this->load->helper('url');
	}

    public function index () {
        echo 'Hello World';

    }
}
?>