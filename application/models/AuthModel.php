<?php

class AuthModel extends CI_Model {
    public function login($email, $password) {
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query->result();
    }

    public function insertUserOrder($name, $email, $alamat) {
        return $this->db->insert('users', array('name' => $name, 'email' => $email, 'alamat' => $alamat));
    }

    public function getUserByEmail($email) {
        $this->db->from('users');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->result();
    }
}