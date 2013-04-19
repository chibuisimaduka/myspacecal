<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author larry
 * */
class Home_Base_Controller extends Controller {

    //put your code here
    public $restful = true;

    public function __construct() {
        parent::__construct();

        //Config::set('auth.driver', 'adminauth');
        Asset::container('home')
                ->bundle('home')
                ->add('html5shim', 'js/html5shim.js')
                ->add('', "js/jquery.js")
                // <!-- @todo: remove unused Javascript for better performance -->
                ->add('transition', "js/bootstrap-transition.js")
                ->add('affix', "js/bootstrap-affix.js")
                ->add('alert', "js/bootstrap-alert.js")
                ->add('modal', "js/bootstrap-modal.js")
                ->add('drop', "js/bootstrap-dropdown.js")
                ->add('scroll', "js/bootstrap-scrollspy.js")
                ->add('tab', "js/bootstrap-tab.js")
                ->add('tooltip', "js/bootstrap-tooltip.js")
                ->add('popover', "js/bootstrap-popover.js")
                ->add('button', "js/bootstrap-button.js")
                ->add('collapse', "js/bootstrap-collapse.js")
                ->add('carousel', "js/bootstrap-carousel.js")
                ->add('typeahead', "js/bootstrap-typeahead.js")
                //<!--Non-Bootstrap JS-->
                ->add('quicksand', "js/jquery.quicksand.js")
                ->add('flexslider', "js/jquery.flexslider-min.js")
                //<!--Custom scripts mainly used to trigger libraries -->
                ->add('script', "js/script.js")
                ->add('bootcss','css/bootstrap.css')
                ->add('animate','css/animate.css')
                ->add('responsive','css/responsive.css')
                ->add('flex','css/flexslider.css')
                ->add('style','css/theme-style.css')
                 ->add('customer','css/custom-style.css')
                ->add('custom','css/colour-blue.css')
                 ->add('chardincss','css/chardinjs.css')
                 ->add('chardinjs','js/chardinjs.js')
                ->add('calendardata','js/data.js')
                ->add('calendario','js/jquery.calendario.js')
                ->add('calendariocss','css/calendar.css')
                ->add('calendariocustom','css/custom_1.css')
                ->add('calendariomodernizr','js/modernizr.custom.63321.js')
            ;
    }

}

?>
