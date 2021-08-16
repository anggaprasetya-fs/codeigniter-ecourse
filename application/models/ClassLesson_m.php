<?php

class ClassLesson_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function add($data)
    {
        return $this->db->insert('class_lesson', $data);
    }
}


?>