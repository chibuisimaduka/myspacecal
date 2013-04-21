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
          <h2 class="page-title"><span>Satellites</span> <small>Edit an observatory</small></h2>
        </div>
      </div>
    </div>    
      
    <div id="content">
      <div class="container">       
        <!-- About -->        
        <div class="row">
        
          <div class="span9">           
    <h2>Select an Observatory</h2>
    <!-- About company -->
   <div class="pull-left">
        
        {{Form::open_for_files('/home/satellites/editchooser', 'POST');}}
        <select name ="sat_id">
            <?php
            foreach ($satellites as $sat) {
                echo "<option value=".$sat->id.">".$sat->name."</option>";                
            }            
            ?>
        </select><br>
        <span class="span4 pull-left"><br><button class="btn btn-inverse" type="submit">Edit Satellite</button></span>
        
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

