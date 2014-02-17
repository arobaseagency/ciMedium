<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
    'register' => array(
        array(
            'field' => 'accoumpt_type',
            'rules' => 'trim'
        ),
        array(
            'field' => 'username',
            'rules' => 'trim|required|xss_clean|min_length[5]|max_length[12]'
        ),
        array(
            'field' => 'password',
            'rules' => 'trim|required|matches[password_compare]|xss_clean|min_length[5]|max_length[12]'
        ),
        array(
            'field' => 'password_compare',
            'rules' => 'trim|required|xss_clean|min_length[5]|max_length[12]'
        ),
        array(
            'field' => 'email',
            'rules' => 'trim|required|valid_email|xss_clean'
        )
    )
);
