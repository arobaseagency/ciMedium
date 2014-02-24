<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


// verifié si l'utilisateur est connecté ou non
if(! function_exists('is_logged'))
{
	function is_logged()
	{
		if( $this->session->userdata('user_data') )
		{
			return true;
		} else {
			return false;
		}
	}
}
