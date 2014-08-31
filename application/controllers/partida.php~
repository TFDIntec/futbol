<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partida extends CI_Controller {

	var $data;
	
	public function __construct() {
        parent::__construct();
		$this->load->model('Partidos_model','',TRUE);
    }
	
	
	public function index()
	{
		$data = array(
			'title' => $this->lang->line("futbol"),
			
			'partidos' => array()
		);
		$partidos = $this->Partidos_model->get_all_partido();
				if(count($partidos) > 0) $data['partidos'] = $partidos;
		
		//print_r($data['partidos']);
		$this->load->view('header',$data);
		$this->load->view('home',$data);
		$this->load->view('footer');
	}

	public 	function crear_partida()
	{
		$data = array(
			'title' => $this->lang->line("futbol"),
		);
		$this->load->view('header',$data);
		$this->load->view('home',$data);
		$this->load->view('footer');	
	}
}
