<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

	var $data;
	
	public function __construct() {
        parent::__construct();
		$this->load->model('login_model');
		$this->load->library('form_validation');
        $this->load->helper('form');
    }
	
	
	public function index()
	{	
		$data['title'] = $this->lang->line("");
		switch($this->session->userdata('profile')){
			case'':
				//$data['token'] = $this->token();
				$this->load->view('login',$data);
				break;
			case 2:
				redirect(base_url().'home');
				break;
			case 6:
				redirect(base_url().'home');
				break;
			default:
				$this->load->view('login',$data);
		}
	}
	
	public function login()
	{
		if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
		{
			$user_name = $this->input->post('username');
			$password =  $this->input->post('password');
			$check_user = $this->login_model->login_user($user_name,$password);
			print_r($check_user);die();
			if($check_user)
			{
				$data = array(
				'logged'	=> TRUE,
				'user_id'   => $check_user->id,
				'user_name' => $check_user->user_name,
				'profile'   => $check_user->profile,
				'profile_name' => $check_user->profile_name
				);
				$this->session->set_userdata($data);
			}
			$this->index();
		}
	}
	
	public function token(){
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}
	
	public function logout(){
		$this->session->sess_destroy();
		$this->index();
	}
	
}
