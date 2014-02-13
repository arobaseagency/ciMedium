<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Layout
{

    private $ci;

    public $data = array();
    private $layout = "default";
    protected $folderName = "layouts/";


    public function __construct()
    {
        $this->ci =& get_instance();

        $uriClass = $this->ci->router->fetch_class();
        $uriMethode = $this->ci->router->fetch_method();
        $this->data['layout_title'] = ucwords($uriClass . ' - ' . $uriMethode);
    }

    public function setTitle($title)
    {
        return $this->data['layout_title'] = $title;
    }

    // Methode pour changer le layout qui sera utilisé
    public function setLayout($layoutName)
    {
        $this->layout = $layoutName;
    }

    // Methode pour récupérer le chemin du layout courant;
    public function getLayout()
    {
        return $this->folderName . $this->layout;
    }

    public function view($filename, $data = array(), $return = false)
    {
        $this->data['layout_content'] = $this->ci->load->view($filename, $data, $return);

        if($return)
        {
            // Si le dernier paramètre est à true alors on renvoit les variables afin de les stockers
            $output = $this->ci->load->view($this->getLayout(), $data, true);

            return $output;
        } else {
            // Si le dernier parmaètre vaut false alors on renvoie les variables et les affiches directement
            // dans le navigateur
            $this->ci->load->view($this->getLayout(), $this->data, false);
        }
    }

}