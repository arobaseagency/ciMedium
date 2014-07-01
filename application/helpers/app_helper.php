<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


// verifié si l'utilisateur est connecté ou non
if(! function_exists('is_logged'))
{
	function is_logged()
	{
		$ci =& get_instance();
		
		if( $ci->session->userdata('user_data') )
		{
			return true;
		} else {
			return false;
		}
	}
}


/*
 * Récupère les informations utilisateurs en correspondance avec la nom de l'attribut
 * passé en paramètre
 */
if(! function_exists('auth_data'))
{
	function auth_data($name)
	{
		$ci =& get_instance();
		
		$data = $ci->session->userdata('user_data');
		
		return $data[$name];
	}
}


// affiche la date du jour actuelle au format Année - Mois - Jour numérique
if(! function_exists('date_now'))
{
    function date_now()
    {
        return date('Y-m-d');
    }
}


if(! function_exists('datetime_now'))
{
    function datetime_now()
    {
        return date('Y-m-d H:i:s');
    }
}



