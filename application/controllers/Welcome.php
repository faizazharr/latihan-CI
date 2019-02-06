<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        // echo '<br> ini tampilan gambar dari base controller';
        $this->load->view('biografi');
    }
}
