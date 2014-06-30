<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class CX_Controller extends CI_Controller
{

    public static $items = array();

    public function __construct()
    {
        parent::__construct();

		$this->output->enable_profiler(true);

        // Pour envoyer des variables dans la console déclarer Console::log(<variable>)
        $this->load->library('Console');
        
        $meta = array(
            array("name" => "robots",
                  "content" => "index, follow"),
            array("name" => "description",
                  "content" => ""),
            array("name" => "keywords",
                  "content" => "voyance en ligne, astrologie, voyance gratuite webcam, voyance gratuite, medium, cartomancie, numérologie"),
            array("name" => "language",
                  "content" => "fr-FR"),
        );

        self::$items['meta'] = $meta;
        
    }
    
    
    public function _roles_sessions()
    {

    }

}