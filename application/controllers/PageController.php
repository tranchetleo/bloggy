<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {
    
    public function index()
    {   
        // Get the articles
        $this->load->model('ArticleModel');
        $data['articles'] = $this->ArticleModel->get_all_articles();



        $this->load->view('accueil', $data);
    }

    public function login()
    {
        $this->load->view('user/login');
    }

    public function register()
    {
        $this->load->view('user/register');
    }
}

