<div>
    <div class ="span2">{{HTML::image($sat->image_url, 'Coverage Image',array('align'=>'left','class'=>'img-polaroid'));}}</div>
                        <div>
                            <span class="span1"><b>Satellite:</b></span><span class="span2">{{$sat->name}}</span><br>
                            <span class="span1"><b>Target:</b></span><span class="span2">{{$schedule->target}}</span><br>
                            <span class="span1"><b>R.A:</b></span><span class="span2">{{$schedule->ra}}</span><br>
                            <span class="span1"><b>Dec:</b></span><span class="span2">{{$schedule->dec}}</span><br>
                            <span class="span1"><b>Starting:</b></span><span class="span2">{{$schedule->start_time}}</span><br>
                            <span class="span1"><b>Ending:</b></span><span class="span2">{{$schedule->end_time}}</span><br>
                            
                            <span class="span1"></span><span class="span2">Can't Make any sense of this information? <a href= "{{URL::to('/home/faq')}}" target="_blank">Click Here</a></span>

                        </div>
    
    
    
    
    
    
</div>