<?php
class Partidos_model extends CI_Model {
	var $ID = '';
    var $equipo_1   = '';
    var $equipo_2 = '';
    var $equipo_1_puntos = '';
	var $equipo_2_puntos = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_all_partido()
    {
		$this->db->select('*',false);
		$query = $this->db->get('partidos');
        return $query->result();
    }

	function save_partido($equipo_1,$equipo_2,$equipo_1_puntos,$equipo_2_puntos)
	{
		$data = array(
			'equipo_1' => $equipo_1,
			'equipo_2' => $equipo_2,
			'equipo_1_puntos' => $equipo_1_puntos,
			'equipo_2_puntos' => $equipo_2_puntos
		);

		$this->db->insert('partidos', $data);
 		return $this->db->insert_id();
	} 

	function save_partido_detalle($partido,$jugador,$jugada)
	{	
		$data = array(
			'ID_partido' => $partido,
			'ID_jugador' => $jugador,
			'ID_jugada' => $jugada
		);

		$this->db->insert('partida_detalle', $data);
 		return $this->db->insert_id();
	}

	function get_partida_detalle($id)
	{
		$this->db->select("p.ID,p.equipo_1_puntos, p.equipo_2_puntos,jus.nombre,tj.descripcion as posicion,juga.jugada, jus.ID_equipo",false);
		$this->db->from('partidos p');
		$this->db->join('partida_detalle pd','pd.ID_partido = p.ID','left');
		$this->db->join('jugadores jus','jus.ID = pd.ID_jugador','left');
		$this->db->join('tipo_jugador tj','tj.ID = jus.ID_tipo_jugador','left');
		$this->db->join('jugadas juga','juga.ID = pd.ID_jugada','left');
		$this->db->where('p.ID',$id);
		$query = $this->db->get();
		return $query->result();
	}

}
?>
