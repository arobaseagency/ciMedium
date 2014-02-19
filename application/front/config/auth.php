<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



$config['auth'] = array();

// Type de compte voir base de donnée table roles
$config['auth']['type'] = array(
    'voyant',
    'consultant'
);

/*
 * Variables de configuration pour la redirection sur les pages
 * de confirmation tel que inscription, activation du compte etc...
 */
$config['auth']['codepage'] = array(
    'inscription' => array(
        'code'  => 'inscription',
        'title' => "Confirmation de votre inscription Voyance en ligne"
    ),

    'activation' => array(
        'code' => 'activation',
        'title' => "Confirmation - Activation de Compte"
    ),
);

