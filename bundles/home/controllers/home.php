<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author larry
 * */
class Home_Home_Controller extends Home_Base_Controller {
    public function get_index(){
        return View::make('home::pages.homepage');
    }
    public function get_schedule(){
        return View::make('home::pages.schedulepage');
    }
    
    public function get_about(){
        return View::make('home::pages.aboutpage');
    }
    public function get_services(){
        return View::make('home::pages.servicespage');
    }
    public function get_blog(){
        return View::make('home::pages.blogpage');
    }
    public function get_privacy(){
        return View::make('home::pages.privacypage');
    }
    public function get_instructions(){
        return View::make('home::pages.instructionspage');
    }
    public function get_terms(){
        return View::make('home::pages.tncpage');
    }
    public function get_faq(){
        return View::make('home::pages.faqpage');
    }
    
    public function get_contact(){
        return View::make('home::pages.contactspage');
    }
    public function get_login(){
        return View::make('home::pages.loginpage');
    }
    public function get_signup(){
        return View::make('home::pages.signuppage');
    }
    
    
}

?>
