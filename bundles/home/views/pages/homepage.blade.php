@layout('home::templates.hometemplate')


@section('content')
<script type ="text/javascript">
    (function ($) {
 $.fn.vAlign = function(fn) {

 return this.each(

 function(i){

 var ah = $(this).width();
 var ph = $(this).parent().width();
 var mh = Math.ceil((ph-ah) / 2);
 var perc = Math.ceil((mh/ph) * 100);
 $(this).css('margin-left',perc + "%");
 });
 };
})(jQuery);
$(document).ready(function(){
 $('.flexslider').vAlign();
 $(window).resize(function() {
 $('.flexslider').vAlign();
});
$("#chardinner").click(function(){
    
})


});
    </script>
<div id="highlighted">
    <div class="inner">
        <!--
        Flexslider
        - May use standard Bootstrap markup within slides
        - For best results use images all the same size (in this example they are 600px x 400px)
        -->
        <!--Flexslider Showshow-->
        <section class="flexslider-wrapper container">
            <div class="flexslider span9" style="position: center" data-slidernav="auto" data-transition="slide">
                <!--The Slides-->
                <div class="slides">                   
                    
                    <div class="slide row-fluid"> 
                  <div class="span6">      {{HTML::image('img/satpic1.png', 'We unlock them all',array('class'=>'animated fadeInDownBig'));}}</div>
                <div class="span6 caption animated fadeInUpBig">
                  <h2>Enkel Bootstrap Theme</h2>
                  <h4>By <a href="http://themelize.me">Themelize.me</a></h4>
                  <p>Perfect starter theme for your company or portfolio!</p>
                  <a href="https://wrapbootstrap.com/user/themelize_me" class="btn btn-large btn-primary">Buy Now</a>
                </div>
              </div>
                    
                    
                          <div class="slide row-fluid">                
                  <div class="span6">      {{HTML::image('img/calendar1.png', 'We unlock them all',array('class'=>'animated fadeInDownBig'));}}</div>
                <div class="span6 caption">
                  <h2>Easy to customise</h2>
                  <h4>
                    <i class="icon-ok"></i> 5 colour schemes<br />
                    <i class="icon-ok"></i> Starter HTML & CSS templates<br />
                    <i class="icon-ok"></i> Well documented
                  </h4>
                  <a href="https://wrapbootstrap.com/user/themelize_me" class="btn btn-large btn-primary">Buy Now</a>
                </div>
              </div>
                    
                    
                    <div class="slide row-fluid">                
                  <div class="span6">      {{HTML::image('img/satpic2.png', 'We unlock them all',array('class'=>'animated fadeInDownBig'));}}</div>
                <div class="span6 caption">
                  <h2>Easy to customise</h2>
                  <h4>
                    <i class="icon-ok"></i> 5 colour schemes<br />
                    <i class="icon-ok"></i> Starter HTML & CSS templates<br />
                    <i class="icon-ok"></i> Well documented
                  </h4>
                  <a href="https://wrapbootstrap.com/user/themelize_me" class="btn btn-large btn-primary">Buy Now</a>
                </div>
              </div>
                    
               
                    
                    
               </div>
            </div>             
        </section>        
    </div>
</div>


<div id="content">
    <div class="container">
        <!-- Mission statement -->
        <div class="row-fluid mission">
            <div class="inner">
                <h3>Check out a <span>Satellite's Schedule</span> any day, any time...! <small><a href="services.htm">Find out more</a></small></h3>
            </div>
        </div>
        <!--Logo & Intro--->

        <div class="block services margin-top-large" >
            <div style ="margin: 0 auto 0"">
            <h2>What is mySpaceCal?</h2>
                <div class="span12">
                    {{HTML::image('img/calendarimg.png', 'Coverage Image',array('align'=>'left'));}}
                    <p class="span8" >    
                        mySpaceCal is a project that seeks to provide information about satellites to 
                        the general public in a way that's easy to understand and comprehend. At mySpaceCal, 
                        we schedule various satellite's targets throughout the year. We seek to make such knowledge
                        easily accessible.</p>
                    <p class="span8" > 
                    Don't know much about satellites? No problem, You can get a quick run down 
                        <a href="#">here</a>
                    </p>
                </div>
            </div>
        </div>
    
    <!-- Services
    <div class="block services margin-top-large">
        <h2 class="block-title"><span>Our Services</span> <small><a href="services.htm">View all</a></small></h2>
        <ul class="thumbnails">

            <li class="span3">
                <h3 class="title"><a href="{{URL::to('/home/home/services')}}" target ="_blank"><i class="icon-ok-sign icon-small icon-inverse-80 icon-circle"></i> Unlock Your Phone</a></h3>
                <p>Unlocking your Phone is now easier than ever!! All it takes is a few steps and you're well on your way to phone freedom! Click on the button below to proceed.<br><br><a class="btn pull-right" href ="{{URL::to('/home/home/services')}}" target ="_blank"><i class="icon-ok-sign"></i>Unlock Phone &raquo</a> </p>
            </li>

            <li class="span3">
                <h3 class="title"><a href="http://www.checkesnfree.com/ target ="_blank""><i class="icon-search icon-small icon-inverse-80 icon-circle"></i> Check ESN</a></h3>
                <p>Not sure about your phone's ESN Number? No problem... You can always look it up and find information about it... Click on the button below to check your ESN Number.<br><br><a class="btn pull-right" href ="http://www.checkesnfree.com/" target ="_blank"><i class="icon-search"></i>Check ESN &raquo</a></p>
            </li>

            <li class="span3">
                <h3 class="title"><a href="https://selfsolve.apple.com/agreementWarrantyDynamic.do" target ="_blank"><i class="icon-check icon-small icon-inverse-80 icon-circle"></i> iPhone Warranty Status</a></h3>
                <p>Not sure about your iPhone's Warranty status? Well we're here to help... Click the button and follow the instructions to find out your phone's status. <br><br><br><a class="btn pull-right" href ="https://selfsolve.apple.com/agreementWarrantyDynamic.do" target ="_blank"><i class="icon-check"></i>Check Status &raquo</a></p>
            </li>


            <li class="span3">
                <h3 class="title"><a href="services.htm"><i class="icon-thumbs-up icon-small icon-inverse-80 icon-circle"></i> Unlock Instructions</a></h3>
                <p >Do you want to find out more about what we do? You can always check out our Services for more information on what we do... Any comments and reviews are welcome on the review page.<br> <a class="btn pull-right" href ="#"><i class="icon-thumbs-up"></i>Unlock Instructions &raquo</a> </p>
            </li>            
        </ul>
    </div>


    <!-- Mission Stat-->
    <div class="block services margin-top-large">
        <h2 class="block-title"><span>Observatories:</span> <small><a href="services.htm">More Info...</a></small></h2>
        <ul class="thumbnails">
            <li class="span6">
                <div>

                    <h4><a href="services.htm">Chandra</a></h4>
                   
                    <div class ="span2">{{HTML::image('img/chandra.jpg', 'Coverage Image',array('align'=>'left','class'=>'img-polaroid'));}}</div>
        <div>
            <span class="span1"><b>Organization:</b></span><span class="span2">NASA, SAO, CXC</span><br>
        <span class="span1"><b>Type:</b></span><span class="span2">X-Ray</span><br>
        <span class="span1"><b>Launched:</b></span><span class="span2">23 July 1999</span><br>
        <span class="span1"><b>Height:</b></span><span class="span2">133,000 km </span><br>
            
        </div>
                 
                </div>

            </li>
<li class="span6">
                <div>

                    <h4><a href="services.htm">Chandra</a></h4>
                   
                    <div class ="span2">{{HTML::image('img/chandra.jpg', 'Coverage Image',array('align'=>'left','class'=>'img-polaroid'));}}</div>
        <div>
            <span class="span1"><b>Organization:</b></span><span class="span2">NASA, SAO, CXC</span><br>
        <span class="span1"><b>Type:</b></span><span class="span2">X-Ray</span><br>
        <span class="span1"><b>Launched:</b></span><span class="span2">23 July 1999</span><br>
        <span class="span1"><b>Height:</b></span><span class="span2">133,000 km </span><br>
            
        </div>
                 
                </div>

            </li>
            <li class="span6">
                <div>

                    <h4><a href="services.htm">Chandra</a></h4>
                   
                    <div class ="span2">{{HTML::image('img/chandra.jpg', 'Coverage Image',array('align'=>'left','class'=>'img-polaroid'));}}</div>
        <div>
            <span class="span1"><b>Organization:</b></span><span class="span2">NASA, SAO, CXC</span><br>
        <span class="span1"><b>Type:</b></span><span class="span2">X-Ray</span><br>
        <span class="span1"><b>Launched:</b></span><span class="span2">23 July 1999</span><br>
        <span class="span1"><b>Height:</b></span><span class="span2">133,000 km </span><br>
        <span class="span1"></span><span class="span2"><a href="#">More Info</a></span><br>
            
        </div>
                 
                </div>

            </li>
        </ul>


    </div>
</div>
</div>



    <!-- portfolio -->
    <!-- Recommended screenshot size: 400px x 300px -->
    <!--
                    <div class="block portfolio margin-top-large">
                        <h2 class="block-title"><span>Our Work</span> <small><a href="portfolio.htm">View all</a></small></h2>
                        <ul class="thumbnails projects">
    
                            <li class="span4 ">
                                <a href="portfolio-project.htm"><img src="img/portfolio/enkel-home-blue.png" alt="Blue Theme" class="img-polaroid" /></a>
                                <h3 class="title"><a href="portfolio-project.htm">Blue Theme</a><small class="pull-right"></small></h3>
                                <p class="muted">Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna.</p>
                            </li>    
    
                            <li class="span4 ">
                                <a href="portfolio-project.htm"><img src="img/portfolio/enkel-home-colours.png" alt="Colour Variations" class="img-polaroid" /></a>
                                <h3 class="title"><a href="portfolio-project.htm">Colour Variations</a><small class="pull-right"></small></h3>
                                <p class="muted">Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna.</p>
                            </li>    
    
                            <li class="span4 ">
                                <a href="portfolio-project.htm"><img src="img/portfolio/enkel-services-green.png" alt="Services Green" class="img-polaroid" /></a>
                                <h3 class="title"><a href="portfolio-project.htm">Services Green</a><small class="pull-right"></small></h3>
                                <p class="muted">Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna.</p>
                            </li>    
                        </ul>
                    </div>     
                </div>
            </div>-->
    <!--
            <div id="content-below" class="wrapper">
                <div class="container">
                    <div class="clients block">
                        <h3 class="block-title"><span>Clients</span></h3>
    <!--Recommended image sizing: 170px & 70px-->
    <!--
    <ul class="thumbnails">
        <li class="span2"><a href="http://themelize.me" class="_tooltip" data-placement="top" data-original-title="HTML 5" title="HTML 5"><img src="img/clients/html5.png" class="img-rounded" alt="HTML 5 logo" /></a></li>
        <li class="span2"><a href="http://themelize.me" class="_tooltip" data-placement="top" data-original-title="CSS 3" title="CSS 3"><img src="img/clients/css3.png" class="img-rounded" alt="CSS 3 logo" /></a></li>
        <li class="span2"><a href="http://themelize.me" class="_tooltip" data-placement="top" data-original-title="Git Hub" title="Git Hub"><img src="img/clients/github.png" class="img-rounded" alt="Git Hub logo" /></a></li>
        <li class="span2"><a href="http://themelize.me" class="_tooltip" data-placement="top" data-original-title="Amazon" title="Amazon"><img src="img/clients/amazon.png" class="img-rounded" alt="Amazon logo" /></a></li>
        <li class="span2"><a href="http://themelize.me" class="_tooltip" data-placement="top" data-original-title="Android" title="Android"><img src="img/clients/android.png" class="img-rounded" alt="Android logo" /></a></li>
        <li class="span2"><a href="http://themelize.me" class="_tooltip" data-placement="top" data-original-title="BBC" title="BBC"><img src="img/clients/bbc.png" class="img-rounded" alt="BBC logo" /></a></li>
    </ul> 
</div>
</div>
</div>-->
    @endsection

