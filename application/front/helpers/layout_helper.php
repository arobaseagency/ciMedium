<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/*
 *  fonction pour afficher les erreurs de formulaire de manière customisé
 */
function tp_form_error($inputName)
{
    echo form_error($inputName, '<span class="help-inline">', '</span>');
}