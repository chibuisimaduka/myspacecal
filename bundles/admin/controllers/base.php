<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author larry
 * */
class Admin_Base_Controller extends Controller {
    //put your code here
    public $restful = true;
        public function __construct() {
        parent::__construct();        

        //Config::set('auth.driver', 'adminauth');
        Asset::container('admin')
                ->bundle('admin')
                ->add('font-awesome', 'bootstrap/css/bootstrap-w-font-awesome.css')
                ->add('bootstrap-responsive', 'bootstrap/css/bootstrap.min.css')
                ->add('prettify', 'js/libs/google-code-prettify/prettify.css')
                ->add('pageslide', 'js/libs/jquery.pageslide/jquery.pageslide.css')
                ->add('bluestyles', 'js/libs/jquery.tablesorter/themes/blue/style.css')
                ->add('tablesorter', 'js/libs/jquery.tablesorter/addons/pager/jquery.tablesorter.pager.css')
                ->add('style', 'styles/style.css')
                ->add('styler', 'styles/datepicker.css')
                ->add('jqueryfile', 'js/libs/jquery-1.8.3.min.js')
                ->add('bootstrapjs', 'bootstrap/js/bootstrap.min.js')
                ->add('excanvas', 'js/libs/flot/excanvas.min.js')
                ->add('flotmin', 'js/libs/flot/jquery.flot.min.js', 'excanvas')
                ->add('flotresize', 'js/libs/flot/jquery.flot.resize.min.js')
                ->add('pie', 'js/libs/flot/jquery.flot.pie.min.js')
                ->add('pretify', 'js/libs/google-code-prettify/prettify.js')
                ->add('tablesorter', 'js/libs/jquery.tablesorter/jquery.tablesorter.min.js')
                ->add('ts-pageslide', 'js/libs/jquery.pageslide/jquery.pageslide.min.js', 'tablesorter')
                ->add('madmin', 'js/madmin.js')
                ->add('application', 'js/application.js')
                ->add('demo', 'js/demo-area-chart.js')
                ->add('dyna-demo', 'js/demo-dynamic-chart.js')
                ->add('datepicker', 'js/bootstrap-datepicker.js')
                ->add('demo-pie', 'js/demo-pie-chart.js')
            ->add('awsomeness','fonts/font-awesome/css/font-awesome.min.css')
            ->add('otherfont','fonts/icomoon-pack-madmin-1.5/style.css');
    }
}

?>
