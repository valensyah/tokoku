<?php

class AuthModel extends CI_Model {
    public function login($email, $password) {
        $query = $this->db->select('*')
                ->from('users')
                ->where('email', $email)
                ->where('password', $password)
                ->get();
        return $query->result();
    }
}