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