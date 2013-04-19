<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author larry
 * */
class Admin_Home_Controller extends Admin_Base_Controller {
    public function get_index(){
        return View::make('admin::pages.mainadmin');
    }
    
}

?>
