<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('session');
    }

    public function register() {
        $this->load->view('user/register');
    }

    public function login() {
        $this->load->view('user/login');
    }

    public function hashPassword($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function doRegister() {
        $name = $this->input->post('username');
        $mail = $this->input->post('email');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');

        if ($password !== $password_confirm) {
            $this->session->set_flashdata('error', 'Les mots de passe ne correspondent pas');
            redirect('/register');
        }

        $hashed_password = $this->hashPassword($password);
        echo $hashed_password;

        $this->UserModel->create($name, $mail, $hashed_password);
        $this->session->set_flashdata('success', 'Votre compte a bien été créé');
        redirect('/login');
    }

    public function authenticate() {
        $mail = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->UserModel->getByMail($mail);

        if ($user === null) {
            $this->session->set_flashdata('error', 'Email ou mot de passe incorrect');
            redirect('/login');
        }

        if (!password_verify($password, $user->getHashedPassword())) {
            $this->session->set_flashdata('error', 'Email ou mot de passe incorrect');
            redirect('/login');
        }

        $this->session->set_userdata('user', $user);
        redirect('/home');
    }
}