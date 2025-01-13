<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'models/ArticleModel.php';

class Accueil extends CI_Controller {

    public function index()
    {
        
        // Get the articles
        $this->load->model('ArticleModel');
        $data['articles'] = $this->ArticleModel->get_all_articles();

        $this->load->view('accueil', $data);
    }

    public function user () {
        $this->load->view('header');

        if ($this->session->user) {
            $this->load->view('');
        } else {
            $this->load->view('login');
        }

    }
}
?>