@layout('home::templates.hometemplate')


@section('content')

<script type="text/javascript">

    function PreviewImage() {
        oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("preview").src = oFREvent.target.result;
        };
    };

</script>
<script type="text/javascript">                                         
    $(document).ready(function() {
        $('#launch_date').datepicker({format: 'dd-mm-yyyy'});
        //$('.dp3').datepicker();
    });                                    
</script>

<div id="highlighted">
    <div class="container">
        <div class="row-fluid header">
            <h2 class="page-title"><span>Questions?</span> <small>We have the answers...</small></h2>
        </div>
    </div>
</div>    

<div id="content">
    <div class="container">       
        <!-- About -->        
        <div class="row">

            <div class="span9">           

                <div class="pull-left">
                    <h2> Some Commonly asked questions about Satellites:</h2>
                    <h3>How is the direction a satellite is pointing to determined?</h3>
                    <h6>What is meant by R.A. and Dec?</h6>
                    <p>
                        The <b>Equatorial Coordinate System</b> is used. 
                        
                        The equatorial coordinate system is a widely-used method of 
                        specifying the positions of celestial objects. It may be implemented in spherical 
                        or rectangular coordinates, both defined by an origin at the center of the Earth, 
                        a fundamental plane consisting of the projection of the Earth's equator onto the 
                        celestial sphere (forming the celestial equator), 
                        a primary direction towards the vernal equinox, and a right-handed convention.
                        
                        The origin at the center of the Earth means the coordinates are geocentric, 
                        that is, as seen from the center of the Earth as if it were transparent and 
                        nonrefracting.[3] The fundamental plane and the primary direction mean that 
                        the coordinate system, while aligned with the Earth's equator and pole, does
                        not rotate with the Earth, but remains relatively fixed against the background 
                        stars. A right-handed convention means that coordinates are positive toward the
                        north and toward the east in the fundamental plane.                        
                    </p>
                    <div>
                    <div class ="span3 pull-right">{{HTML::image('img/radecgif.gif',"Blog pic 1",array('align'=>'right'));}}</div>
                    <h5>Diagrammatically:</h5>
                    <p>The equatorial coordinate system in spherical coordinates.
The fundamental plane is formed by projection of the Earth's equator 
onto the celestial sphere, forming the celestial equator (blue).
The primary direction is established by projecting the Earth's orbit onto the 
celestial sphere, forming the ecliptic {red), and setting up the ascending node 
of the ecliptic on the celestial equator, the vernal equinox. Right ascensions 
are measured eastward along the celestial equator from the equinox, and declinations 
are measured positive northward from the celestial equator - two such coordinate pairs 
are shown here. Projections of the Earth's north and south geographic poles form the north 
and south celestial poles, respectively.</p>
                    </div>
                </div>


            </div>

            <!-- sidebar -->
            <div class="span3 sidebar sidebar-right">
                <div class="inner">
                    <div class="block">
                        <h3 class="block-title sub-title"><span>Quick Menu</span></h3>
                        <ul class="nav nav-list secondary-nav">
                            <li><a href={{URL::to('/home/home/')}}><i class="icon-chevron-right"></i>Home</a></li>
                            <li><a href={{URL::to('/home/home/schedule')}}><i class="icon-chevron-right"></i>Schedule</a></li>
                        </ul>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>

@endsection


