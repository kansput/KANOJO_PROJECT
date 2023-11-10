<?php
class Login extends CI_Controller {
    public function index() {
        $this->load->view("templates/view_header");
        $this->load->view("auten/view_login");
        $this->load->view("templates/view_footer");
    }
}