<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
	 
	 public function __construct() {
		parent::__construct();
	 }
	 
	 public function login_user($username,$password){
		// Build the URL
		$request = "http://scripts/service/windowsAutentication.php?user={$username}&pass={$password}";
		
		// GET request and turn into associative array
		$result = @json_decode(@file_get_contents($request));
		if($result->valid){
			$this->db->where('usuario',$username);
			$query = $this->db->get('empleados');
			return $query->row();
		}else{
			return false;
		}
	 }
}