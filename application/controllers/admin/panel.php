<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Panel extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        echo __CLASS__. " bienvenue dans mon admin et ma méthode ".__METHOD__;
    }
}