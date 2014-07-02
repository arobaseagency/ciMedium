<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 *  Validation Formulaire pour Ion_Auth et autre formulaire
 *
 */
$config = array(

    'login' => array(
        array(
            'label' => 'Identity',
            'field' => 'identity',
            'rules' => 'trim|required|xss_clean'
        ),
        array(
            'label' => 'Password',
            'field' => 'password',
            'rules' => 'trim|required|xss_clean'
        ),
    ),


    'change_password' => array(
        array(
            'label' => 'Ancien mot de passe',
            'field' => 'old',
            'rules' => 'trim|xss_clean|required',
        ),
        array(
            'label' => 'Nouveau mot de passe',
            'field' => 'new',
            'rules' => 'trim|xss_clean|required|min_length[]|max_length[]'
        ),
        array(
            'label' => 'Confirmation',
            'field' => 'new_confirm',
            'rules' => 'trim|xss_clean|required'
        )
    ),

);