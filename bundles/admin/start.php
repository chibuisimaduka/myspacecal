<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author larry
 * */

Autoloader::map(array(
    'Admin_Base_Controller' => Bundle::path('admin') . 'controllers/base.php',
    //'Home' => Bundle::path('home') . 'models/merchant.php',
));
Autoloader::namespaces(array(
    'Admin\Models' => Bundle::path('admin') . 'models',
    'Admin\Libraries' => Bundle::path('admin') . 'libraries',
));



?>
