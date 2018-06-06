<?php

/**
 * Queries Model.
 * @author foodbaby
 *
 */
class Queries extends CI_Model {
    /**
     * inserts all data in  registration form to user table.
     */
    public function register($data) {
        return $this->db->insert('user', $data);
    }
    /*
     * select data from user table
     * where $email & $password match.
     */
    public function login($email, $password) {
        #can use either.
        $query = $this->db->get_where('user', ['email' => $email, 'password' => $password]);
        //$query = $this->db->where(['email' => $email, 'password' => $password])->get('user');
        
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }
}