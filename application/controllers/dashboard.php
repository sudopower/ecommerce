<?php

 
class dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    } 

    
    function admin()
    {
        $data['users'] = $this->User_model->gettop10users();
        $data['products'] = $this->User_model->gettop10products();

        $this->load->view('index',$data);
    }

    
    
}

   