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
          <h2 class="page-title"><span>Satellites</span> <small>Add a new observatory</small></h2>
        </div>
      </div>
    </div>    
      
    <div id="content">
      <div class="container">       
        <!-- About -->        
        <div class="row">
        
          <div class="span9">           
           <div class ="span2 pull-right">{{HTML::image('img/chandra.jpg',"Blog pic 1",array("class"=>"img-polaroid",'id'=>'preview'));}}</div>

    <div class="pull-left">
        @if(Session::get('message'))
        {{Alert::success(Session::get('message'))}}
        @endif

        @if($errors->has())

        <ul type ="none">
            {{$errors->first('EventName','<li class="alert alert-error">:message</li>')}}
            {{$errors->first('StartDate','<li class="alert alert-error">:message</li>')}}
            {{$errors->first('StartTime','<li class="alert alert-error">:message</li>')}}
            {{$errors->first('EndDate','<li class="alert alert-error">:message</li>')}}
            {{$errors->first('EndTime','<li class="alert alert-error">:message</li>')}}
            {{$errors->first('Description','<li class="alert alert-error">:message</li>')}}

        </ul>
        @endif
        {{Form::open_for_files('home/satellites/add', 'POST');}}
        <span class="span2"><b>Satellite Name:</b></span><span class="span4"><input type="text"  class="input-block-level"  placeholder="Name of the Observatory"  name ="satellite_name" required></span><br>
        <span class="span2"><b>Companies:</b></span><span class="span4"><input type="text" id="event_from_date" class="input-block-level"  name ="companies" placeholder="Companies Involved" required></span><br>
        <span class="span2"><b>Type:</b></span><span class="span4"><input type="text" class="input-block-level" name ="type" placeholder="Type of Satellite" required></span><br>

        <span class="span2"><b>Orbit Height:</b></span><span class="span4"><input type="text" class="input-block-level" name ="orbit_height" placeholder="Height of Orbit" required></span><br>
        <span class="span2"><b>Launch Date:</b></span><span class="span4"><input type="text"  id="launch_date" class="input-block-level"  name ="launch_date" placeholder="Date of launch" required></span><br>
          <span class="span2"><b>Launch Location:</b></span><span class="span4"><input type="text" class="input-block-level"  name ="launch_location" placeholder="Location of Launch" required></span><br>
          <span class="span2"><b>Website:</b></span><span class="span4"><input type="text" class="input-block-level"  name ="website" placeholder="Website URL"></span><br>
        <span class="span2"><b>Description:</b></span><span class="span4"><textarea class="input-block-level" name ="description" placeholder="Short Description of the Satellite" required></textarea></span><br>

        <span class="span2"><b>Image:</b></span><span class="span4"><input type="file" class="input-block-level" id ="uploadImage" name ="ImageUrl" value="Civil" onchange="PreviewImage();"></span><br>

        <span class="span2"></span><span class="span4"><br><button class="btn btn-inverse" type="submit">Add Satellite</button></span><br>
        </form>
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

