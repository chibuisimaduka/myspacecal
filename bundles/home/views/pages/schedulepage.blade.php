@layout('home::templates.hometemplate')


@section('content')

<script type="text/javascript">	
    $(function() {
			
        var cal = $( '#calendar' ).calendario( {
            onDayClick : function( $el, $contentEl, dateProperties ) {

                for( var key in dateProperties ) {
                    console.log( key + ' = ' + dateProperties[ key ] );
                }

            },
            caldata : codropsEvents
        } ),
        $month = $( '#custom-month' ).html( cal.getMonthName() ),
        $year = $( '#custom-year' ).html( cal.getYear() );

        $( '#custom-next' ).on( 'click', function() {
            cal.gotoNextMonth( updateMonthYear );
        } );
        $( '#custom-prev' ).on( 'click', function() {
            cal.gotoPreviousMonth( updateMonthYear );
        } );
        $( '#custom-current' ).on( 'click', function() {
            cal.gotoNow( updateMonthYear );
        } );

        function updateMonthYear() {				
            $month.html( cal.getMonthName() );
            $year.html( cal.getYear() );
        }

        // you can also add more data later on. As an example:
    
                               					
                                        cal.setData( <?php echo $schedule ?> );
                                        // goes to a specific month/year
                                      //  cal.goto( 3, 2013, updateMonthYear );

                               
         
			
    });
    
$(document).ready(function(){
// var ah = $('#calendar').width();
// var width = ah/7; 
// console.log(width);
// $(".fc-calendar .fc-row > div, .fc-calendar .fc-head > div").css('width:'+width);
$("#calendar a").click(function(){
   var haha= $(this).attr("id");
   //console.log(haha);  
    $.get("{{URL::to('home/schedules/get/')}}"+haha, function(data, status) {
//                        alert(status);

                            if (status) {
                                $(".modal-body").html(data);
                             //    $("#myModal").modal('hide');
                               //  $("#myModal").modal('show');
                             //   $('#filesManagerModal').modal({show: true});
                               

                            }
                        });
   
});

});
    
</script>


<div id="highlighted">
    <div class="container">
        <div class="row-fluid header">
         <!--   <h2 class="page-title"><span>The Schedule</span> <small>Who's where when...</small></h2>-->
        </div>
    </div>
</div>    

<div id="content" class=" backer">
    <div class="container ">       
        <!-- About -->        
        <div class="row">

            <div class="custom-calendar-wrap custom-calendar-full span12">
                <div class="custom-header clearfix">
                    <h3 class="custom-month-year">
                        <span id="custom-month" class="custom-month"></span>
                        <span id="custom-year" class="custom-year pull-right"></span>
                        <nav>
                            <span id="custom-prev" class="custom-prev"></span>
                            <span id="custom-next" class="custom-next"></span>
                            <span id="custom-current" class="custom-current" title="Got to current date"></span>
                        </nav>
                    </h3>
                </div>
                <div id="calendar" class="fc-calendar-container"></div>
            </div>
            <div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">Schedule Info:</h3>
                        </div>
                        <div class="modal-body">
                            <div class="span2 pull-left">
                            </div>
                            <div class="span3 pull-right"><p></p>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

                        </div>
                    </div>   
            
        </div>
    </div>
</div>

@endsection

