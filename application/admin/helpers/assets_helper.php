<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

// chemin css frontend
if(! function_exists('assets'))
{
    function assets($file=null)
    {
        return base_url().'assets/'. $file;
    }
}

if(! function_exists('css_url'))
{
    function css_url($nom=null)
    {
        return base_url().'assets/css/'. $nom .'.css';
    }
}

// Chemin javascript frontend
if(! function_exists('js_url'))
{
    function js_url($nom=null)
    {
        return base_url().'assets/js/'. $nom .'.js';
    }
}

// Chemin images frontend
if(! function_exists('img_url'))
{
    function img_url($nom=null)
    {
        return base_url().'assets/img/'. $nom;
    }
}

if(! function_exists('img'))
{
    function img($nom=null, $alt=null)
    {
        return '<img src="'. img_url($nom) .'" alt="'.$alt.'" />';
    }
}

/*********************** HELPER ADMIN *************************/

if(! function_exists('admin_assets'))
{
    function admin_assets($file=null)
    {
        $ci =& get_instance();
        return base_url() . '/assets/' .$ci->config->item('admin') .'/'. $file;
    }
}


if(! function_exists('admin_url'))
{
    function admin_url()
    {
        return base_url().BASE_ADMIN;
    }
}

// Path CSS url Admin
if(! function_exists('adminCss_url'))
{
    function adminCss_url($nom=null)
    {
        return base_url().'assets/'.BASE_ADMIN.'/css/'. $nom .'.css';
    }
}

// Path JS url Admin
if(! function_exists('adminJs_url'))
{
    function adminJs_url($nom=null)
    {
        return base_url().'assets/'.BASE_ADMIN.'/js/'. $nom .'.js';
    }
}

// Path IMAGE url Admin
if(! function_exists('adminImg_url'))
{
    function adminImg_url($nom=null)
    {
        return base_url().'assets/'.BASE_ADMIN.'/img/'. $nom;
    }
}
