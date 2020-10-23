<?php
defined("BASEPATH") OR exit('No direct script acccess allowed');

class Bootstrap extends CI_Controller {
    function index() {
        $this->load->view('v_bootstrap');
    }
}