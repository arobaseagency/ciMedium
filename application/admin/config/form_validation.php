<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
    'register' => array(
        array(
            'field' => 'username',
            'rules' => 'trim|required|xss_clean|min_length[5]|max_length[12]'
        ),
        array(
            'field' => 'password',
            'rules' => 'trim|required|matches[check_password]|xss_clean|min_length[5]|max_length[12]'
        ),
        array(
            'field' => 'check_password',
            'rules' => 'trim|required|xss_clean|min_length[5]|max_length[12]'
        ),
        array(
            'field' => 'email',
            'rules' => 'trim|required|valid_email|xss_clean'
        )
    )
);
