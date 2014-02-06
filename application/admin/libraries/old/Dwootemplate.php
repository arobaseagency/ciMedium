<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require "Dwoo/dwooAutoload.php";

/**
 * Creates an template interface from Codeigniter to DWOO.
 *
 * This software is provided 'as-is', without any express or implied warranty.
 * In no event will the authors be held liable for any damages arising from the use of this software.
 *
 *
 * @author     Stefan Verstege <stefan.verstege@newmedia.nl>
 * @copyright  Copyright (c) 2008, Stefan Verstege
 * @license    http://dwoo.org/LICENSE   Modified BSD License
 * @link       http://www.newmedia.nl/
 * @version    1.1.0
 * @date       2009-07-18
 * @package    Dwoo
 *
 * @uses the dwoo package from http://dwoo.org
 */
class Dwootemplate extends Dwoo {

    protected $dwoo_data = array();

    protected $module_path_view;

    /**
     * Constructor for the DwooTemplate engine
     *
     */
    public function __construct() {
        // Call parents constructor
        parent::__construct();

        // Set the config settings
        $this->initialize();

        // Assign some defaults to dwoo
        $CI                         =& get_instance();
        $this->dwoo_data            = new Dwoo_Data();
        $this->dwoo_data->js_files  = array();
        $this->dwoo_data->css_files = array();
        $this->dwoo_data->CI        = $CI;
        $this->dwoo_data->site_url  = $CI->config->site_url(); // so we can get the full path to CI easily
        $this->dwoo_data->uniqid    = uniqid();
        $this->dwoo_data->timestamp = mktime();

        if($CI->config->item('modules_path'))
        {
            $this->module_path_view = $CI->config->item('modules_path') .DS. $CI->uri->segment(1) .DS. 'views/';
        }

        log_message('debug', "Dwoo Template Class Initialized");
    }


    /**
     * Assign data to dwoo data object
     *
     * @param string $key
     * @param mixed $value
     */
    public function assign($key, $value) {
        $this->dwoo_data->$key = $value;
    }


    /**
     *  shortcut method $dwootemplate->assign() & $dwootemplate->display()
     *  @param string $sTemplate path and filename template
     *  @param array $data variable template
     *  @param boolean true or false
     *  @return template view
     *
     */
    public function view($sTemplate = null, $data = null, $return = false)
    {
        $ci =& get_instance();
        $ci->benchmark->mark('dwoo_parse_start');

        if(isset($data) && is_array($data))
        {
            foreach($data as $key=>$value)
            {
                $this->dwoo_data->assign($key, $value);
            }
        }

        if( !file_exists($this->template_dir . $sTemplate) )
        {
            // Conditional for use module with codeigniter and find path for view in module
            if(!file_exists($this->module_path_view . $sTemplate))
            {
                $message = sprintf('Template file \'%s\' not found.', $sTemplate);
                show_error($message);
                log_message('error', $message);
            }
            else
            {
                $this->template_dir = $this->module_path_view;
            }
        }

        // Create new template
        $tpl = new Dwoo_Template_File($this->template_dir . $sTemplate);

        // render the template
        $template = $this->get($tpl, $this->dwoo_data);

        // Finish benchmark
        $ci->benchmark->mark('dwoo_parse_end');

        // Return results or not ?
        if ($return == false) {
            //$CI->output->final_output = $template;

            $ci->output->set_output($template);
        }
        else
        {
            return $template;
        }
    }


    /**
     * Add Javascript files to template
     *
     * @param string $js
     */
    public function add_js($js) {
        $current   = $this->dwoo_data->js_files;
        $current[] = $js;
        $this->dwoo_data->js_files = $current;
    }


    /**
     * Add Css stylesheets to template
     *
     * @param string $css
     */
    public function add_css($css) {
        $current   = $this->dwoo_data->css_files;
        $current[] = $css;
        $this->dwoo_data->css_files = $current;
    }



    /**
     * Display or return the compiled template
     * Since we assign the results to the standard CI output module
     * you can also use the helper from CI in your templates!!
     *
     * @param string $sTemplate
     * @param boolean $return
     * @return mixed
     */
    public function display($sTemplate, $return = FALSE) {
        // Start benchmark
        $CI =& get_instance();
        $CI->benchmark->mark('dwoo_parse_start');

        // Check if file exists
        if ( !file_exists($this->template_dir . $sTemplate ) ) {
            $message = sprintf('Template file \'%s\' not found.', $sTemplate);
            show_error($message);
            log_message('error', $message);
        }

        // Create new template
        $tpl = new Dwoo_Template_File($this->template_dir . $sTemplate);

        // render the template
        $template = $this->get($tpl, $this->dwoo_data);

        // Finish benchmark
        $CI->benchmark->mark('dwoo_parse_end');

        // Return results or not ?
        if ($return == FALSE) {
            //$CI->output->final_output = $template;
            $CI->output->set_output($template);
        } else {
            return $template;
        }
    }


    /**
     * Toggle Codeigniter profiler on/off
     *
     */
    public function enable_profiler($toggle = TRUE) {
        $CI =& get_instance();
        $CI->output->enable_profiler($toggle);
    }


    /**
     * Set http header
     *
     * @example $this->output->set_header("HTTP/1.1 200 OK");
     * @example $this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s', $last_update).' GMT');
     * @param string $header
     */
    public function set_header($header) {
        $CI =& get_instance();
        $CI->output->set_header($header);
    }


    /**
     * Set status header
     *
     * @example $this->output->set_status_header('401');
     * @example // Sets the header as: Unauthorized
     * @param string $header
     */
    public function set_status_header($header) {
        $CI =& get_instance();
        $CI->output->set_status_header($header);
    }


    /**
     * Assign the dwootemplate config items to the instance
     *
     */
    private function initialize() {
        $CI =& get_instance();
        $CI->config->load('dwootemplate', TRUE);
        $config = $CI->config->item('dwootemplate');
        foreach ($config as $key => $val) {
                $this->$key = $val;
        }
    }
}