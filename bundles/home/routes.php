<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author larry
 * */

Route::get('(:bundle)/schedule/get/(:any?)', array('uses' => 'home::home@schedules'));
Route::get('(:bundle)/schedules/get/(:any?)', array('uses' => 'home::home@schedules_ajax'));
Route::get('(:bundle)/faq', array('uses' => 'home::home@faq'));
Route::get('(:bundle)/satellites/add/(:any?)', array('uses' => 'home::home@add_satellites'));
Route::get('(:bundle)/satellites/editor/(:any?)', array('uses' => 'home::home@edit_satellites'));
Route::get('(:bundle)/satellites/edit', array('uses' => 'home::home@satellite_editor_picker'));
Route::get('(:bundle)/satellites/profile/(:any?)', array('uses' => 'home::home@satellite_profile'));

Route::get('(:bundle)/satellite/details/(:any?)', array('uses' => 'home::home@satellite_details'));
Route::post('(:bundle)/satellites/editchooser', array('uses' => 'home::home@editchooser'));
Route::post('(:bundle)/satellites/editor', array('uses' => 'home::home@editor'));

Route::post('(:bundle)/satellites/add', array('uses' => 'home::home@add_satellites'));
Route::controller(Controller::detect('home'));
?>
