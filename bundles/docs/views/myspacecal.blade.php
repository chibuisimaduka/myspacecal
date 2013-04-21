@layout('docs::template')

@section('title')
My Space Cal Docs
@endsection

@section('head')
Api Documentation
@endsection


@section('header')
MySpaceCal documentation
@endsection

@section('aside')
@parent
<li><a href="#ret_schedules">Retrieve Schedules</a></li>
<li><a href="#ret_all_satellites">Retrieve Satellites</a></li>

@endsection

@section('content')
<div id="functions">
    <div id="conventions">
        <h5>Conventions</h5>
        {{Typography::info("Please note that the return type for all the functions are JSON objects."."<br>"."The http headers contain the same value as the code in the json object produced")}}
        {{Typography::warning("In case of errors the messages array is populated and contains detailed messages on what happened")}}
        <span class="inline">   {{Typography::info("To learn more about the HTTP status codes check out this ")}}
            {{HTML::link("http://en.wikipedia.org/wiki/List_of_HTTP_status_codes","Page")}}</span>
    </div>
    <div id="ret_schedules">
        <h2>Retrieve Schedules</h2>
        <h4>Link</h4> ~/home/schedule/get/(sat_id)?per_page=(num)&page=(num)<br>
        <h4>Parameters (Input Type:GET Element: JSON)</h4>
        <?php
        $body = array(
            array(
                'par' => 'satellite_id',
                'datatype' => 'Integer',
                'desc' => 'Id of satellite whose schedule is required',
                'req' => 'Optional',
            ),
            array(
                'par' => '$per_page',
                'datatype' => 'Integer',
                'desc' => 'Results wanted per page',
                'req' => 'Optional',
            ),
            array(
                'par' => 'page',
                'datatype' => 'Integer',
                'desc' => 'page of results',
                'req' => 'Optional',
            ),
          
        );
        echo Table::open();
        echo Table::headers('Parameter', 'Data Type', 'Description', 'Required/Optional');
        echo Table::body($body);
        echo Table::close();
        ?>
        <h4>Return Values</h4>
        <?php
        $body = array(
            array(
                'act' => 'Saved Successfully',
                'http' => '200',
                'desc' => 'Retrieval Successful',
            ),
            array(
                'act' => 'Validation Error(s)',
                'http' => '400',
                'desc' => 'Errors in input Data',
            ),
        );
        echo Table::open();
        echo Table::headers('Action', 'HTTP Status Code', 'Description');
        echo Table::body($body);
        echo Table::close();
        ?>
        <h4>Return Objects Paginated:</h4>
<script src="https://gist.github.com/nomad23/9487e678e7cb7095f1b2.js"></script>
 <h4>Return Objects Paginated (by satellite id):</h4>
<script src="https://gist.github.com/nomad23/4529ea1a26236fdfb36e.js"></script>
    </div><br>
    
    
    <div id="ret_all_satellites">
        <h2>Retrieve All Satellites</h2>
        <h4>Link</h4> ~/home/satellite/details/(sat_id)<br>
        <h4>Parameters (Input Type:GET Element: JSON)</h4>
        <?php
        $body = array(
            array(
                'par' => 'sat_id',
                'datatype' => 'Integer',
                'desc' => 'Id of satellite whose details is required',
                'req' => 'Optional',
            ),
          
        );
        echo Table::open();
        echo Table::headers('Parameter', 'Data Type', 'Description', 'Required/Optional');
        echo Table::body($body);
        echo Table::close();
        ?>
      
        <h4>Return Values</h4>
        <?php
        $body = array(
            array(
                'act' => 'Saved Successfully',
                'http' => '200',
                'desc' => 'Retrieval Successful',
            ),
            array(
                'act' => 'Validation Error(s)',
                'http' => '400',
                'desc' => 'Errors in input Data',
            ),
        );
        echo Table::open();
        echo Table::headers('Action', 'HTTP Status Code', 'Description');
        echo Table::body($body);
        echo Table::close();
        ?>
        <h4>Return Objects (All):</h4>
<script src="https://gist.github.com/nomad23/c343c8b205ce274f906d.js"></script>
<h4>Return Objects (One):</h4>
<script src="https://gist.github.com/nomad23/188c4b10f211ab4fb696.js"></script>

    </div><br>
   
    
    
   
</div>
@endsection