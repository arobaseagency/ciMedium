<?php if(!defined('BASEPATH')) exit('No direct script access allowed');



class Voyant extends CX_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->layout->initLayout('voyant');
    }


    public function index()
    {
    }


    public function profile($name=null)
    {
        parent::$items['title'] = "Mon titre de page !";

        $this->layout->view('voyant/profile', parent::$items);
    }


    public function chat_webcam($id = null)
    {

        echo "Bonjour Voyante :" . $id;

    }


}