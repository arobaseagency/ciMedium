<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Layout
{

    private $ci;

    public $data = array();
    private $layout = "default";
    protected $folderName = "layouts";


    public function __construct()
    {
        $this->ci =& get_instance();

        // initialisation du contenu layout
        $this->data['layout_content'] = null;

        $uriClass = $this->ci->router->fetch_class();
        $uriMethode = $this->ci->router->fetch_method();
        $this->data['layout_title'] = ucwords($uriClass . ' - ' . $uriMethode);

    }

    public function setTitle($title)
    {
        return $this->data['layout_title'] = $title;
    }

    public function initLayout($name)
    {
        $this->layout = $name;
    }

    public function getLayout()
    {
        return $this->folderName . '/' . $this->layout;
    }

    public function view($view, $data = null, $return = false)
    {
        $this->data['layout_content'] .= $this->ci->load->view($view, $data, true);

        if($return)
        {
            $output = $this->ci->load->view($this->getLayout(), $this->data, true);
            return $output;
        } else {
            $this->ci->load->view($this->getLayout(), $this->data, false);
        }
    }




}