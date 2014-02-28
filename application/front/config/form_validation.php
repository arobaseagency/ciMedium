<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
    'register' => array(
        array(
        	'label' => 'Type de compte',
            'field' => 'code',
            'rules' => 'trim|required|xss_clean|regex_match[/^voyant|consultant$/]'
        ),
        array(
        	'label' => "nom d'utilisateur",
            'field' => 'username',
            'rules' => 'trim|required|xss_clean|min_length[5]|max_length[12]'
        ),
        array(
        	'label' => "Mot de passe",
            'field' => 'password',
            'rules' => 'trim|required|matches[password_compare]|xss_clean|min_length[5]|max_length[12]'
        ),
        array(
        	'label' => "Comparer password",
            'field' => 'password_compare',
            'rules' => 'trim|required|xss_clean|min_length[5]|max_length[12]'
        ),
        array(
            'field' => 'email',
            'rules' => 'trim|required|valid_email|xss_clean'
        )
    ),
    
	
	'login' => array(
		array(
			'field' => 'email',
			'rules' => 'trim|required|xss_clean|valid_email'
		),
		
		array(
			'field' => 'password',
			'rules' => 'trim|required|xss_clean'
		)
	),
	
	'profile/information' => array(
		array(
			'field' => 'email',
			'rules' => 'trim|required|xss_clean|valid_email'
		),
		array(
			'field' => 'ville',
			'rules' => 'trim|xss_clean|max_length[25]'
		),
		array(
			'field' => 'sex',
			'rules' => 'trim|xss_clean|required|regex_match[/^homme|femme$/]'
		),
		array(
			'label' => 'Date de naissance',
			'field' => 'date_naissance',
			'rules' => 'trim|xss_clean|callback_validate_datebirth'
		),
	)
);
