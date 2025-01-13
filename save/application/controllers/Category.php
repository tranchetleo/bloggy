<?php
class Category extends CI_Controller {
    public function index() {
        $this->load->model('CategoryModel');
        $data['categories'] = $this->CategoryModel->get_all_categories();
        $this->load->view('categories/index', $data);
    }

    public function view($id) {
        $this->load->model('CategoryModel');
        $data['category'] = $this->CategoryModel->get_category_by_id($id);
        $this->load->view('categories/view', $data);
    }
}
?>