<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function __contruct()
    {
        parent:: __contruct();
    }

    function index()
    {

        $data['main'] = "main";
        $this->load->view('template', $data);

    }
}