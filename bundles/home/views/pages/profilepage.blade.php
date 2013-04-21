@layout('home::templates.hometemplate')


@section('content')


 <div id="highlighted">
      <div class="container">
        <div class="row-fluid header">
          <h2 class="page-title"><span>Satellites</span> <small>Data About an Observatory</small></h2>
        </div>
      </div>
    </div>    
      
    <div id="content">
      <div class="container">   
        <!--Portfolio feature item-->
        <div class="row">
          <div class="span4">
               @if(Session::get('message'))
        {{Alert::success(Session::get('message'))}}
        @endif
            <!-- Slider for project pictures -->
            <div id="carousel-project" class="carousel slide">
              <div class="carousel-inner">
                <div class="item active">
                  {{HTML::image($sat->image_url, 'Coverage Image',array('align'=>'left',));}}
                  <div class="carousel-caption">
                    <p>{{$sat->name}}</p>
                  </div>
                </div>
               
              </div>

            </div>
          </div> 
          
          <div class="span7 sidebar sidebar-right">
            <!-- quick details -->
            <div class="block">
              <h3 class="block-title"><span>{{$sat->name}}</span></h3>
              <dl>
                <dt>Observatory Type</dt>
                <dd>{{$sat->type}}</dd>
                <dt>Companies</dt>
                <dd>{{$sat->companies}}</dd>
                <dt>Launch Date</dt>
                <dd>{{$sat->launch_date}}</dd>
                <dt>Launced at</dt>
                <dd>{{$sat->launch_location}}</dd>
                <dt>Description</dt>
                <dd>{{$sat->description}}</dd>
                 </dl>
              <a href="{{$sat->website}}" target="_blank" class="btn btn-primary">Visit Home Website</a>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection

