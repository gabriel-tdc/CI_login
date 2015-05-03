<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Home extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $this->load->view('includes/header.php');
      $this->load->view('home_view', $data);
      $this->load->view('includes/footer.php');
    }
    else
    {
      redirect('login', 'refresh');
	  }
  }
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('home', 'refresh');
  }
}