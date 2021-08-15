<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
    }

    public function index()
    {
        // $data['user'] = $this->ion_auth->user()->row();
        $this->load->view('dashboard/index');
    }

    public function logout()
    {
        $this->ion_auth->logout();
        redirect('auth/login');
    }
}

?>