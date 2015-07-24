<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orange extends CI_Controller {
    public function index() {
        $this->load->view('orange/header');
        $this->load->view('orange/index');
        $this->load->view('orange/footer');
    }

    public function categories() {
        $this->load->view('orange/header');
        $this->load->view('orange/categories');
        $this->load->view('orange/footer');
    }

    public function details(){
        $this->load->view('orange/header');
        $this->load->view('orange/details');
        $this->load->view('orange/footer');
    }

    public function test(){
        //$this->load->view('orange/header');
        $this->load->view('orange/test');
        $this->load->view('orange/footer');
    }
}
