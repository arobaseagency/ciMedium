<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Forum extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->output->enable_profiler(true);
    }


    public function index()
    {
        echo "hello forum !";
    }


}