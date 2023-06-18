<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

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
        $data = ['page' => 'form_order', 'id_product' => $_GET['id_product']];
		$this->load->view('theme/index', $data);
	}

    public function checkout() {
        $this->load->model(array('CheckoutModel', 'ProductModel', 'AuthModel'));

        $name = $this->input->post('nama');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');

        $query = $this->AuthModel->insertUserOrder($name, $email, $alamat);

        if ($query) {
            $product = $this->ProductModel->getProductById($this->input->get('id_product'));
            $user = $this->AuthModel->getUserByEmail($email);
            $query_checkout = $this->CheckoutModel->insertCheckout($product[0]->id, $user[0]->id);
            
            if ($query_checkout) {
                redirect('Dashboard/index');
            } else {
                $this->index();
            }
        }
    }
}
