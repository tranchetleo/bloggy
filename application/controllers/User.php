<?php
class User extends CI_Controller {
    public function index() {
        $this->load->model('UserModel');
        $data['users'] = $this->UserModel->get_all_users();
        $this->load->view('users/index', $data);
    }

    public function view($id) {
        $this->load->model('UserModel');
        $data['user'] = $this->UserModel->get_user_by_id($id);
        $this->load->view('users/view', $data);
    }
}
?>