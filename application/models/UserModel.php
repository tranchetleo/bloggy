<?php
require_once APPPATH . 'models/UserEntity.php';

class UserModel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get($id) {
        $query = $this->db->get_where('user', array('id' => $id));
        $row = $query->row();
        return new UserEntity($row->id, $row->name, $row->mail, $row->hashed_password, $row->validated, $row->role);
    }

    public function getByMail($mail) {
        $query = $this->db->get_where('user', array('mail' => $mail));
        $row = $query->row();
        return new UserEntity($row->id, $row->name, $row->mail, $row->hashed_password, $row->validated, $row->role);
    }

    public function create($name, $mail, $hashed_password) {
        $data = array(
            'name' => $name,
            'mail' => $mail,
            'hashed_password' => $hashed_password,
            'validated' => 0,
            'role' => 'user'
        );
        $this->db->insert('user', $data);
    }
}

?>