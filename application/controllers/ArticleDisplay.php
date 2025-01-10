<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'models/ArticleModel.php';

class ArticleDisplay extends CI_Controller {

    public function index($id)
    {

        $this->load->model('ArticleModel');
        $data['article'] = $this->ArticleModel->get_article_by_id();

        $this->load->view('articledisplay', $data);
    }
}