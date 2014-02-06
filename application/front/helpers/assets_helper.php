<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

// chemin css frontend
if(! function_exists('assets'))
{
    function assets($file=null)
    {
        return base_url().'assets/'. $file;
    }
}

if(! function_exists('asset_css'))
{
    function asset_css($nom=null)
    {
        return base_url().'assets/css/'. $nom .'.css';
    }
}

// Chemin javascript frontend
if(! function_exists('asset_js'))
{
    function asset_js($nom=null)
    {
        return base_url().'assets/js/'. $nom .'.js';
    }
}

// Chemin images frontend
if(! function_exists('asset_img'))
{
    function asset_img($nom=null)
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


