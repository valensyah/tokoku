<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	public function index()
	{
		$this->load->model('ProductModel');
		$data = [
			'page' => 'dashboard_user',
			'product' => $this->ProductModel->getProduct()
		];
		$this->load->view('theme/index', $data);
	}
	public function indexAdmin() {
		$this->load->model('CheckoutModel');
		$data = [
			'page' => 'dashboard_admin',
			'checkout' => $this->CheckoutModel->getCheckout()
		];
		$this->load->view('theme/index', $data);
	}
}
