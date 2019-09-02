<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Langswitch extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');        

    }

    function switchLanguage($language = "") {
        $language = ($language != "") ? $language : "en";
        $this->session->set_userdata('site_lang', $language);        
        //redirect(base_url().$language);
        redirect(base_url());
    }
}