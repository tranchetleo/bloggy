<?php
class UserModel extends CI_Model {
    public function get_all_users($limit = 15, $offset = 0) {
        $query = $this->db->get('User', $limit, $offset);
        return $query->result_array();
    }

    public function get_user_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('User');
        return $query->row_array();
    }

    public function create_user($data) {
        return $this->db->insert('User', $data);
    }
}

?>