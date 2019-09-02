<?php

require_once  dirname(__FILE__).'/../libraries/i18n.class.php';

class LanguageLoader
{
    function initialize() {

        /*
        |--------------------------------------------------------------------------
        | Loading JSON files with translated values
        |--------------------------------------------------------------------------
        |
        | In this function the class take the site_lang value and combines it with
        | the route's and picks up the translated values.
        | Example
        |	Route: home
        |   site_lang: es
        | So the script will search in i18n/home/es.json
        |
        |   Route:      product/detail
        |   site_lang:  en
        | So the script will search in i18n/product/es.json
        |
        */
        
        $ci =& get_instance();
        $ci->load->helper('language');
        $ci->load->library('session');  
        

        $site_lang = $ci->session->userdata('site_lang');

        $uri = $ci->uri->segment(1);

        if($uri == '') {
            $uri = 'home';
        }

        if (!$site_lang) {
            $site_lang = 'en';
        } 

        if(file_exists(dirname(__FILE__).'/../i18n/'.$uri.'/lang_'.$site_lang.'.json')){

            $i18n = new i18n(dirname(__FILE__).'/../i18n/'.$uri.'/lang_{LANGUAGE}.json', dirname(__FILE__).'/../cache/lang',$site_lang );

            $i18n->setForcedLang($site_lang);
            
            $i18n->init();
            
            $ci->session->set_userdata('_T',$i18n->getTranslatedValues());        

        }
        
    }
}