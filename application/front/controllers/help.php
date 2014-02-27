<?php if(!defined('BASEPATH')) exit('No direct script access allowed');




class Help extends CX_Controller
{

    
    public function __construct()
    {
        parent::__construct();
        
        $this->layout->initLayout('iframe');
    }
    
    
    public function profile()
    {
    
        $this->layout->view('aide/membre');
    
    }
    

}