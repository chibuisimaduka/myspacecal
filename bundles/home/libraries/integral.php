<?php

//AGILE SATELLITE PARSER

namespace Home\Libraries;

Class Integral {

    public function parser() {
          $handle = @fopen("http://integral.esac.esa.int/isocweb/schedule.html?action=schedule&startRevno=$i&endRevno=$end2&reverseSort=&format=csv", "r");

        if ($handle) {
            //Delete the header
            fgetcsv($handle);

            while (($data[] = fgetcsv($handle)) !== FALSE) {
                
            }
            fclose($handle);
        } else {
            throw new Exception('Error updating ' . $this->getName());
        }



        $revolution = $data[0][0];
        $startTime = $data[0][1];
        $endTime = $data[0][2];
        $source = $data[0][4];
        $ra = $data[0][5];
        $dec = $data[0][6];
        $obs = $data[0][9];
       // dd($data);
        
        foreach ($data as $d) {
            //dd($d[0]);
              $schedule = new \Home\Models\Schedule();  
                    $schedule->satellite_id = 2;
                $schedule->revolution = $d[0];
                $schedule->start_time = $d[1];
                $schedule->end_time = $d[2];
                $schedule->target = $d[4];
               // $source = $d[4];
                $schedule->ra = $d[5];
                $schedule->dec = $d[6];
                $schedule->observation_id = $d[9];
                //dd($schedule);
                //dd($schedule);
                $schedule->save();
                
                        
                
            
        }
    }

}

