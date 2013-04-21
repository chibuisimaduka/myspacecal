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

    public function get_index() {
        $satellite = new \Home\Models\Satellite;
       $satellites = $satellite::all();
        return View::make('home::pages.homepage')->with('satellites',$satellites);
    }
    public function get_faq(){
      return View::make('home::pages.faq');  
    }
    
    public function get_schedules_ajax($slug=null){
        if($slug!=null){
            $schedule = new \Home\Models\Schedule;
            $thisschedule = $schedule::find($slug);
            
            $sat = new \Home\Models\Satellite;
            $thissat = $sat::find($thisschedule->satellite_id);
            return View::make("home::pages.modal")
                        ->with("schedule", $thisschedule)
                ->with('sat',$thissat);
        }
        
    }

    public function post_editchooser() {
        $sat_id = Input::get('sat_id');
        return Redirect::to('/home/satellites/editor/' . $sat_id);
    }
    public function get_satellite_profile($slug=null){
        if ($slug==null){
            return Redirect::to('/home/home/');
        }
        else{
            $satellite = new \Home\Models\Satellite;
            $satellites = $satellite::find($slug);
            return View::make('home::pages.profilepage')->with('sat',$satellites);
        }
        
    }

    public function get_satellite_details($slug = null) {
        if ($slug == null) {
            $satellite = new \Home\Models\Satellite;
            $satellites = $satellite::all();
            $message = "Retrieval Successful";
            $data = array();
            foreach ($satellites as $row) {
                array_push($data, $row->to_array());
            }
            return Event::first("app.success", array(200, $message, $data));
        } else {
            $satellite = new \Home\Models\Satellite;
            $satellites = $satellite::find($slug);
            if (is_null($satellites)) {
                $message = "Not Found";
                return Event::first("app.success", array(404, $message));
            } else {
                $satellites = $satellite::where('id', '=', $slug)->get();
                $message = "Retrieval Successful";
                $data = array();
                foreach ($satellites as $row) {
                    array_push($data, $row->to_array());
                }
                return Event::first("app.success", array(200, $message, $data));
            }
        }
    }

    public function post_editor() {
        $id = Input::get('id');
        // dd(Input::get('description'));
        $satellite = new \Home\Models\Satellite;
        $satellite = $satellite::find($id);
        $satellite->name = Input::get('satellite_name');
        $satellite->launch_date = Input::get('launch_date');
        $satellite->launch_location = Input::get('launch_location');
        $satellite->type = Input::get('type');
        $satellite->website = Input::get('website');
        $satellite->description = Input::get('description');
        $satellite->orbit_height = Input::get('orbit_height');
        $satellite->companies = Input::get('companies');

        if (Input::file('ImageUrl.name') != null) {
            $filename = Str::random(32) . '.' . File::extension(Input::file('ImageUrl.name'));
            Input::upload('ImageUrl', 'public/img/satimgs', $filename);
            $satellite->image_url = 'img/satimgs/' . $filename;
        }
        $satellite->save();

        //return
        return Redirect::to('/home/satellites/profile/' . $id)->with('message', 'You have edited the observatory successfully');
    }

    public function get_satellite_editor_picker() {
        $satellite = new \Home\Models\Satellite;
        $sats = $satellite::all();
        return View::make('home::pages.editsatchooser')->with('satellites', $sats);
    }

    public function get_edit_satellites($slug = null) {
        if ($slug == null) {
            return Redirect::to('/home/home/');
        } else {
            $input['sat_id'] = array($slug);
            $rules = array(
                'sat_id' => 'exists:satellites,id',
            );
            $validation = Validator::make($input, $rules);

            if ($validation->fails()) {
                return Redirect::to('home/home/');
            } else {
                $satellite = new \Home\Models\Satellite;
                $satdata = $satellite::find($slug);
                //dd($satdata);
                return View::make('home::pages.editsat')->with('satellite', $satdata);
            }
        }
    }

    public function get_add_satellites() {
        return View::make('home::pages.addsat');
    }

    public function post_add_satellites() {
        // return View::make('home::pages.addsat');
        //Adding a satellite from the form
        $satellite = new \Home\Models\Satellite;

        $satellite->name = Input::get('satellite_name');
        $satellite->launch_date = Input::get('launch_date');
        $satellite->launch_location = Input::get('launch_location');
        $satellite->type = Input::get('type');
        $satellite->website = Input::get('website');
        $satellite->description = Input::get('description');
        $satellite->orbit_height = Input::get('orbit_height');
        $satellite->companies = Input::get('companies');

        if (Input::file('ImageUrl.name') != null) {
            $filename = Str::random(32) . '.' . File::extension(Input::file('ImageUrl.name'));
            Input::upload('ImageUrl', 'public/img/satimgs', $filename);
            $satellite->image_url = 'img/satimgs/' . $filename;
        }
        $satellite->save();
        
        $sat = $satellite::where('name', '=', Input::get('satellite_name'))->first();
        
                return Redirect::to('/home/satellites/profile/' . $sat->id)->with('message', 'You have added the observatory successfully');

    }

    public function get_schedule() {
        $schedule = new \Home\Models\Schedule();

        $schedules = $schedule::all();
        //$message = "Retrieval Successful";
        $data = array();
        foreach ($schedules as $row) {
            array_push($data, $row->to_array());
        }
        //dd($schedules);
        $cal_array = array();
        
        foreach ($data as $row) {
            //dd($row);
            $start_time = $row["start_time"];
            $haha = date("m-d-Y", strtotime($start_time));
           
            $target = "<a href='#' class='calclass".$row['satellite_id']."' id='".$row['id']."' data-toggle='modal' data-target='#myModal' >".$row["target"]."</a>";
            if (isset($cal_array[$haha])){
                $target.= $cal_array[$haha];  
                 $cal_array = array_merge($cal_array, array($haha => $target));
            }
            else{
                $cal_array = array_merge($cal_array, array($haha => $target));
            }
            
            ;
        }
       // dd($cal_array);

        
        

        $data2 = (json_encode($cal_array));

        // $data2 = json_encode($data);



        return View::make('home::pages.schedulepage')->with("schedule", $data2)->with("schedules",$schedules);
    }

    public function get_parser() {
        $agiler = new \Home\Libraries\Agile();
        $agiler->parser();

        $integ = new \Home\Libraries\Integral();
        $integ->parser();
    }

    public function get_schedules($slug = null) {
        $schedule = new \Home\Models\Schedule();
        if ($slug == null) {


            $per_page = Input::get("per_page", 20);
            $page = Input::get("page", 1);
            $schedules = $schedule->order_by('start_time', 'desc')->paginate($per_page);
//              
            //dd($schedules);
            //  $schedules = $schedule::all();   
//         $data = array();
//            foreach ($schedules as $row) {
//                array_push($data, $row->to_array());
//            }
            // $haha=json_encode($schedules);
            $message = "Retrieval Successful";
            return Event::first("app.success", array(200, $message, $schedules));
        } else {
            $sat_id = $slug;
            $schedules = $schedule::where('satellite_id', '=', $sat_id)->get();
            $message = "Retrieval Successful";
            $data = array();
            foreach ($schedules as $row) {
                array_push($data, $row->to_array());
            }
            return Event::first("app.success", array(200, $message, $data));
        }
    }

//    public function get_about(){
//        return View::make('home::pages.aboutpage');
//    }
//    public function get_services(){
//        return View::make('home::pages.servicespage');
//    }
//    public function get_blog(){
//        return View::make('home::pages.blogpage');
//    }
//    public function get_privacy(){
//        return View::make('home::pages.privacypage');
//    }
//    public function get_instructions(){
//        return View::make('home::pages.instructionspage');
//    }
//    public function get_terms(){
//        return View::make('home::pages.tncpage');
//    }
//    public function get_faq(){
//        return View::make('home::pages.faqpage');
//    }
//    
//    public function get_contact(){
//        return View::make('home::pages.contactspage');
//    }
//    public function get_login(){
//        return View::make('home::pages.loginpage');
//    }
//    public function get_signup(){
//        return View::make('home::pages.signuppage');
//    }
}

?>
