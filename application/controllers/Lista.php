
<?php

    defined('BASEPATH') OR exit('No direct script access allowed!');

    class Lista extends CI_Controller{

        function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
           $this->load->view('template/header');
           $this->load->view('template/navigation');
           $this->load->view('lista');
           $this->load->view('template/footer');
        }

    }