<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author David Wambugu <davidwambugu@gmail.com>
 */
class Docs_Home_Controller extends Docs_Base_Controller {
    //put your code here
    public function get_index() {
        return Redirect::to('/docs/myspacecal/');
    }
}