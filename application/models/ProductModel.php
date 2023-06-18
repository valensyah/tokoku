<?php

class ProductModel extends CI_Model {
    public function getProduct() {
        $this->db->from('products');
        $query = $this->db->get();
        return $query->result();
    }

    public function getProductById($id_product) {
        $this->db->from('products');
        $this->db->where('id', $id_product);
        $query = $this->db->get();
        return $query->result();
    }
}