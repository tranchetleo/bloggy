<?php

class ArticleModel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_articles($limit = 15, $offset = 0) {
        $query = $this->db->get('Article', $limit, $offset);
        return $query->result_array();
    }

    public function get_article_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('Article');
        return $query->row_array();
    }

    public function create_article($data) {
        return $this->db->insert('Article', $data);
    }
}
?>