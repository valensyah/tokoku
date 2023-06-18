<?php

class CheckoutModel extends CI_Model {
    public function insertCheckout($id_product, $id_user) {
        return $this->db->insert('checkouts', array('product_id' => $id_product, 'user_id' => $id_user, 'isPaid' => 0, 'created_at' => date("Y-m-d")));
    }

    public function getCheckout() {
        $this->db->from('checkouts');
        $this->db->select('*');
        $this->db->join('products', 'checkouts.product_id = products.id');
        $this->db->join('users', 'checkouts.user_id = users.id');
        $query = $this->db->get();
        return $query->result();
    }
}