<?php

    defined('BASEPATH') OR exit('No direct script access allowed!');

    class User extends CI_Controller{

        function __construct()
        {
            parent::__construct();
        }

        public function login()
        {
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('login');
        $this->load->view('template/footer');
        }

    }