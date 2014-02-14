<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *  Controller par défaut appelé lorsque l'on arrive sur le site
 *  grace au fichier route.php la variable de routing désigne cette class
 *  comme étant la class par défaut à appeler en premier lorsque l'on arrive sur le site
 *
 *  Ce sera sur cette class qui devra afficher les méthodes nécessaires aux actions
 *  de la page d'accueil du site
 *
 **/
class Home extends CX_Controller
{

    public function __construct()
    {
        parent::__construct();
        # layout par défaut "default.php"
    }

    public function index()
    {
        parent::$items['title'] = "Mon titre de page !";

        $this->layout->view('accueil', parent::$items);
    }



}
