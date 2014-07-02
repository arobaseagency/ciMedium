<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Base_Controller extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->lang->load('auth');

        $this->output->enable_profiler(true);
    }

}