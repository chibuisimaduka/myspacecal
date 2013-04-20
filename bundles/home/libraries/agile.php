<?php

//AGILE SATELLITE PARSER
namespace Home\Libraries;

Class Agile {

    public function parser() {
        $fp = @fopen('http://agile.asdc.asi.it/current_pointing.html', "r");

        if ($fp) {
            $response = '';
            while ($line = stream_get_line($fp, 65535)) {
                $response .= $line;
            }
            fclose($fp);

            $reg = "/<tr class=\'riga(?:1|2)hide\'>\n+<td > &nbsp <\/td>\n+<td>([a-zA-Z0-9-+.,\"() ]+)<br>([a-zA-Z0-9-+., ]+)<br><\/td>\n+\s*<td>\s*\d+.\d+\s*<\/td>\n+\s*<td>-?\d+.\d+<\/td>\n+\s*<td><div class='rashow'>\s*(\d+.\d+)\s*<\/div><div class='radegshow'>\s*[0-9hms. ]+\s*<\/div><\/td>\n+\s*<td><div class='decshow'>\s*(-?\d+.\d+)\s*<\/div><div class='decdegshow'>\s*[0-9Â°'.\"+ -]+\s*<\/div><\/td>\n+\s*<td align='center'>\s*(\d{4}-\d{2}-\d{2})\s*(\d{2}:\d{2})\s*<\/td>\n+\s*<td  align='center'>\s*(\d{4}-\d{2}-\d{2})\s*(\d{2}:\d{2})\s*<\/td>/";
            preg_match_all($reg, $response, $matches, PREG_SET_ORDER);


           // dd($matches);

            foreach ($matches as $match) {
                
                $schedule = new \Home\Models\Schedule();
                $schedule->satellite_id = 1;
                $schedule->target = $match[1];
                $schedule->observation_id = $match[2];
                $schedule->ra = $match[3];
                $schedule->dec = $match[4];
                $schedule->start_time = $match[5].' '.$match[6];
                $schedule->end_time = $match[7].' '.$match[8];
                
                $schedule->save();
                
                

                //echo "--------> $match[2]<br>";
                //$events->addEvent($satName, $match[2], $match[5].'T'.$match[6].'Z', $match[7].'T'.$match[8].'Z', $match[1], 0, $match[3], $match[4]);
            }
        }
    }

}

