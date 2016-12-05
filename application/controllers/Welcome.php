<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home Controller
 */
class Welcome extends MY_Controller 
{
    public function index()
    {

        /*
         * Examples to put variables on view
         *  
         *  $this->data['title'] = 'The title of the page is dynamic';
         *  $this->bladeView('welcome.welcome');
         * 
         *  or
         * 
         *  $this->bladeView('welcome.welcome', array('title' => 'Another way to put variables'));
         * 
         *  or
         * 
         *  $localVariable['title'] = 'Another way'
         *  $this->bladeView('welcome.welcome', $localVariable);
         *
         *  or
         *
         *  $this->bladeView('welcome.welcome', compact($object));
         *  --------------------------------------------------------
         *
         *  The view location is: application/views/welcome/welcome.blade.php
         *  The template layout location is: application/views/layouts/default.blade.php
         *
         */

        $this->data['title'] = 'The title of the page is dynamic';
        
        $this->bladeView('welcome.welcome'); 
    }
}