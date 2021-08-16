<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('message', 'You must login to view this page');
            redirect('login', 'refresh');
        } else {
            if (!$this->ion_auth->is_admin()) {
                $this->session->set_flashdata('message', 'You must be an admin to view this page');
                redirect('login', 'refresh');
            }
        }
    }

    public function index()
    {
        $this->load->view('dashboard/index');
    }

    public function logout()
    {
        $this->ion_auth->logout();
        redirect('login');
    }
}

?>