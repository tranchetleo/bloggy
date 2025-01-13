<?php
class Article extends CI_Controller {
    public function index() {
        $this->load->model('ArticleModel');
        $data['articles'] = $this->ArticleModel->get_all_articles();
        $this->load->view('articles/index', $data);
    }

    public function view($id) {
        $this->load->model('ArticleModel');
        $data['article'] = $this->ArticleModel->get_article_by_id($id);
        $this->load->view('articles/view', $data);
    }
}

?>