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

}
?>