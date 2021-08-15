<?php

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        if (!$this->ion_auth->logged_in()) {
            redirect('Auth/login', 'refresh');
        } else {
            if (!$this->ion_auth->is_admin()) {
                $this->session->set_flashdata('message', 'You must be an admin to view this page!');
                redirect('Auth/login', 'refresh');
            }
        }
    }

    public function index()
    {
        $this->load->view('dashboard/user/profile');
    }

    public function update()
    {
        $id     = $this->input->post('id');
        $data   = array(
            'first_name'=> $this->input->post('first'),
            'last_name' => $this->input->post('last'),
            'username'  => $this->input->post('name'),
            'email'     => $this->input->post('email'),
            'password'  => $this->input->post('password'),
            'phone'     => $this->input->post('phone'),
            'address'   => $this->input->post('address'),
            'company'   => $this->input->post('company'),
            'about'     => $this->input->post('about')
        );

        $result = $this->ion_auth->update($id, $data);
        echo json_encode($result);
    }
}


?>