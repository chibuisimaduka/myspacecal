<?php

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
*
* @author larry
**/ 
namespace Home\Models;

use \Laravel\Database\Eloquent\Model as Eloquent;

class Satellite extends Eloquent {
    //put your code here

    public static function validate($data) {
        return \Validator::make($data, static::$rules);
    }
}

