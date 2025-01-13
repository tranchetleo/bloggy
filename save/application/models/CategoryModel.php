<?php
class CategoryModel extends CI_Model {
    public function get_all_categories($limit = 15, $offset = 0) {
        $query = $this->db->get('Category', $limit, $offset);
        return $query->result_array();
    }

    public function get_category_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('Category');
        return $query->row_array();
    }

    public function create_category($data) {
        return $this->db->insert('Category', $data);
    }
}
?>