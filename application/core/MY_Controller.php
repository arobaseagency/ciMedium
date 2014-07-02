<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


require APPPATH.'core/Base_Controller.php';
require APPPATH.'core/Admin_Controller.php';
require APPPATH.'core/Auth_Controller.php';

class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

}