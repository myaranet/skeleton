{{--
/**
 * Default Layout
 *
 * @package	myara.skeleton
 * @subpackage  view
 * @author	Myara Developers - Main Developer: Rodrigo Borges <http://rodrigoborges.info>
 * @copyright	Copyright (c) 2016, Myara. (http://myara.net/)
 * @license	GPL v3
 * @link	http://skeleton.myara.net
 * @since	Version 0.0.1
 * @filesource
 */
--}}
@include('layouts.includes.header')
@include('layouts.menus.default')
    <div class="container-fluid">
        <h1>Hello, world!</h1>
        @yield('content')
    </div>
@include('layouts.includes.footer')