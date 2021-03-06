<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
   public function __construct()
   {
    parent::__construct();
    $this->load->model('Mregister');
     $this->load->library('session');
   }

   function index()
  {
      $this->load->view('template/header');
      $this->load->view('register');
      $this->load->view('template/footer');
  }


  public function tambah()
	{
			if ($this->input->post('Pass')!=$this->input->post('rePass')){
				$this->session->set_flashdata('message', 'error_not_match');
                redirect('register');
			}
			$this->Mregister->tambahDataUser();
			$this->session->set_flashdata('message', 'success');
			redirect('masuk');

	}
}
