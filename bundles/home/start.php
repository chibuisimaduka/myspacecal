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
    'Home_Base_Controller' => Bundle::path('home') . 'controllers/base.php',
    //'Home' => Bundle::path('home') . 'models/merchant.php',
));
Autoloader::namespaces(array(
    'Home\Models' => Bundle::path('home') . 'models',
    'Home\Libraries' => Bundle::path('home') . 'libraries',
));



?>
