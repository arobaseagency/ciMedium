<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
    'register' => array(
        array(
            'field' => 'code',
            'rules' => 'trim|required|xss_clean|regex_match[/^voyant|consultant$/]'
        ),
        array(
            'field' => 'username',
            'rules' => 'trim|required|xss_clean|min_length[5]|max_length[12]|is_unique[users.username]'
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
            'rules' => 'trim|required|valid_email|xss_clean|is_unique[users.email]'
        ),
        array(
            'field' => 'sex',
            'rules' => 'trim|required|xss_clean|regex_match[/^homme|femme$/]'
        )
    )
);
