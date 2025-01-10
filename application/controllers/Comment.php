<?php
class Comment extends CI_Controller {
    public function index() {
        $this->load->model('CommentModel');
        $data['comments'] = $this->CommentModel->get_all_comments();
        $this->load->view('comments/index', $data);
    }

    public function view($id) {
        $this->load->model('CommentModel');
        $data['comment'] = $this->CommentModel->get_comment_by_id($id);
        $this->load->view('comments/view', $data);
    }
}
?>