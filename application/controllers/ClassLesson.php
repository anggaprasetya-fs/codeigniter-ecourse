<?php

class ClassLesson extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ClassLesson_m');

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
        $this->load->view('dashboard/class/index');
    }

    public function createLessonPage()
    {
        $this->load->view('dashboard/class/create');
    }

    public function add()
    {   
        $a          = str_replace(' ', '-', strtolower($this->input->post('title')));
        $timestamp  = strtotime(date('d-m-Y'));
        $img        = $this->input->post('image');
        $img_name   = md5($timestamp.'-'.$a.date('s'));
        $estimate   = $this->input->post('num_estimate').' '.$this->input->post('estimate');
        $estimate   = $this->input->post('num_estimate') <= 1 ? $estimate : $estimate.'s';

        $config['upload_path']      = './img/class/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = 250;
        $config['file_name']        = $img_name;
        
        $this->upload->initialize($config);

        if ($this->upload->do_upload('image')) 
        {
            $img_data = array('upload_data' => $this->upload->data());

            $data     = array(
                'class_name'        => $this->input->post('title'),
                'class_image'       => $img_data['upload_data']['file_name'],
                'class_description' => $this->input->post('description', TRUE),
                'class_author'      => $this->input->post('author'),
                'class_estimate'    => $estimate,
                'class_status'      => $this->input->post('status'),
                'class_tag'         => $this->input->post('tag'),
                'class_start'       => $this->input->post('start'),
                'class_end'         => $this->input->post('end')
            );

            $result   = $this->ClassLesson_m->add($data);
            echo json_encode($result);
        }
    }
}


?>