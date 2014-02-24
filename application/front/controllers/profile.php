<?php if(!defined('BASEPATH')) exit('No direct script access allowed');



class Profile extends CX_Controller
{


    public function __construct()
    {
		parent::_construct();
		
		$this->layout->initLayout('profile');
    }
    
    
    public function index()
    {
     	echo "ici";
		
    }

}