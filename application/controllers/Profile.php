<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function index()
    {
        $this->load->view('index');
    }

    public function nama($nama)
    {
        $this->load->view('index');
    }
}
