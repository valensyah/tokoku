<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct() {
		parent::__construct();
		$this->load->library('session');
	 }
	public function index()
	{
		$this->load->view('login');
	}

    public function login() {
        $this->load->model(array('AuthModel', 'ProductModel'));
        $this->load->library('session');

        $result = $this->AuthModel->login($this->input->post('email'), $this->input->post('password'));
        if (count($result) > 0) {
            $this->session->set_userdata('user', $result);
			if ($result[0]->role == 1) {
				redirect('Dashboard/indexAdmin');
			} else {
				redirect('Dashboard/index');
			}
            
        } else {
            $data['error'] = 'username/password tidak invalid';
            $this->load->view('login', $data);
        }
    }
}
