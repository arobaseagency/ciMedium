<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Forum extends CX_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        echo "hello forum";
    }

    public function showtemplate()
    {
        $data = array(
            'title' => "Mon titre de page",
            'message' => "Mon message",
            'foo' => "variable foo",
        );

        $this->layout->view('vueTest', $data);

    }


}