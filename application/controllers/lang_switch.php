<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lang_switch extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
    }
 
    function switchLanguage($language = "") {
        $language = ($language != "") ? $language : "spanish";
        $this->session->set_userdata('site_lang', $language);
        redirect(base_url());
    }
}