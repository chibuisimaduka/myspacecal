<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of base
 *
 * @author david
 */
class Docs_Base_Controller extends Controller {

    public $restful = true;

    //put your code here
    public function __call($method, $parameters) {
        return Response::error(404);
    }

}