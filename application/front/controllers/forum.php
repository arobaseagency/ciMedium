<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Forum extends CX_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        echo "hello forum !";
    }

    public function showtemplate()
    {
        $data = array();
        $data['title'] = "mon titre h1 !";
        $data['foo'] = "une variable simple";

        $this->layout->view('vueTest', $data);
    }


}