<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partida extends CI_Controller {

	var $data;
	
	public function __construct() {
        parent::__construct();
		$this->load->model('Partidos_model','',TRUE);
		$this->load->model('Jugadas_model','',TRUE);
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
			'jugada_ofensiva' => array(),
			'jugada_defensiva' => array(),
			'jugada_penalidad' => array()
		);
		
		$ofensiva = $this->Jugadas_model->jugada_tipos(1);
		if(count($ofensiva) > 0) $data['jugada_ofensiva'] = $ofensiva;

		$defensiva = $this->Jugadas_model->jugada_tipos(2);
		if(count($defensiva) > 0) $data['jugada_defensiva'] = $defensiva;		

		$penalidad = $this->Jugadas_model->jugada_tipos(4);
		if(count($penalidad) > 0) $data['jugada_penalidad'] = $penalidad;		

		//print_r($data);
		$this->load->view('header',$data);
		$this->load->view('crear_partida',$data);
		$this->load->view('footer');	
	}
}
