<?php

class ClassLesson extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ClassLesson_m');

        if (!$this->ion_auth->logged_in()) {
            redirect('Auth/login', 'refresh');
        } else {
            if (!$this->ion_auth->is_admin()) {
                $this->session->set_flashdata('message', 'You must be an admin to view this page');
                redirect('Auth/login', 'refresh');
            }
        }
    }

    public function index()
    {
        $this->load->view('dashboard/class/index');
    }
}


?>