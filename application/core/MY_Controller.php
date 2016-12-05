<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Philo\Blade\Blade;

/**
 * Modified core Controller with Blade Templating
 * 
 * @package	myara.skeleton
 * @subpackage  core
 * @author	Myara Developers - Main Developer: Rodrigo Borges <http://rodrigoborges.info>
 * @copyright	Copyright (c) 2016, Myara. (http://myara.net/)
 * @license	GPL v3
 * @link	http://skeleton.myara.net
 * @since	Version 0.0.1
 * @filesource
 */
class MY_Controller extends CI_Controller 
{
    private $cache, $views;
    protected $data;

    public function __construct()
    {
        parent::__construct();
        $this->views = APPPATH . 'views';
        $this->cache = APPPATH . 'cache';
    }

    /**
     * Render a View on Blade Templating
     * 
     * @param string $view The View located at application/views/
     * @param array $data (Optional) An associative array of data 
     *                               to be extracted for use in the view
     *                               if the $data is not specified,
     *                               the view will use $this->data
     */
    public function bladeView($view, $data=array())
    {
        if($data) {
            $this->data = $data;
        }
        
        $blade = new Blade($this->views, $this->cache);
        echo $blade->view()->make($view, $this->data)->render();
    }
}
