<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->load->view('includes/header.php');
    $this->load->view('login_view');
    $this->load->view('includes/footer.php');
  }
}
