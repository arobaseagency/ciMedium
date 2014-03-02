<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/*
 *  fonction pour afficher les erreurs de formulaire de manière customisé
 */
function tp_form_error($inputName)
{
    return form_error($inputName, '<span class="help-inline">', '</span>');
}


/*
 * fonction pour afficher la class error du bootstrap afin de colorer en rouge
 * les éléments de formulaire
 */
function tp_class_error($inputName)
{
    if( tp_form_error($inputName) != false )
    {
        echo "error";
    }
}


/*
 *  fonction dédié à l'affichage des messages flash
 */
function tp_flash_msg()
{
    $ci =& get_instance();
    if($ci->session->flashdata('msg') != '')
    {
        $msg = $ci->session->flashdata('msg');
        $msgType = explode('~', $msg);

        $html = "<div id='flash-msg' class='alert alert-" . $msgType[0] . "'>";
        $html .= "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
        $html .= $msgType[1];
        $html .= "</div>";

        echo $html;
    }
}



/*
 * fonction permettant d'afficher le status active ou non sur un lien de menu
 */
function tp_active($uriName)
{
	$ci =& get_instance();

	$uri = $ci->uri->segment(2);
	if($uriName == strtolower($uri))
	{
		echo 'class="active"';
	}
}

/**
 * fonction qui affiche en % pourcentage le taux de completion
 * du profile utilisateur
 */
function tp_complete_profile()
{
	$ci =& get_instance();

	if($ci->session->userdata('user_data') !== null)
	{
		$userSession = $ci->session->userdata('user_data');
		//$userData = $ci->db->get_where('info_users', array('users_id' => $userSession['id']))->row();
		$query = $ci->db->where('users_id', $userSession['id'])
                        ->get('info_users')
                        ->row_array();

		$totalInfo = count($query) - 2;
        $counter = 0;
        foreach($query as $cle => $value)
        {
            if($cle != 'id' and $cle != 'users_id')
            {
                if($value != null or $value != '')
                {
                    $counter += 1;
                }
            }
        }

        $percent = ($counter / $totalInfo) * 100;

		return $percent;

	}
}
