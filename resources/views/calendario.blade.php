@extends('layautA')

@section('content')
 <div class="app-title">
  <div>
    <h1><i class="fa fa-calendar"></i> Calendar</h1>
    <p>Full Calander page for managing events</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Calendar</a></li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile row">
      <div class="col-md-3">
        <div id="external-events">
          <h4 class="mb-4">Draggable Events</h4>
          <div class="fc-event">My Event 1</div>
          <div class="fc-event">My Event 2</div>
          <div class="fc-event">My Event 3</div>
          <div class="fc-event">My Event 4</div>
          <div class="fc-event">My Event 5</div>
          <p class="animated-checkbox mt-20">
            <label>
              <input id="drop-remove" type="checkbox"><span class="label-text">Remove after drop</span>
            </label>
          </p>
        </div>
      </div>
      <div class="col-md-9">
        <div id="calendar"></div>
      </div>
    </div>
  </div>
</div>

    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{asset('js/plugins/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/jquery-ui.custom.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/fullcalendar.min.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function() {

      	$('#external-events .fc-event').each(function() {

      		// store data so the calendar knows to render an event upon drop
      		$(this).data('event', {
      			title: $.trim($(this).text()), // use the element's text as the event title
      			stick: true // maintain when user navigates (see docs on the renderEvent method)
      		});

      		// make the event draggable using jQuery UI
      		$(this).draggable({
      			zIndex: 999,
      			revert: true,      // will cause the event to go back to its
      			revertDuration: 0  //  original position after the drag
      		});

      	});

      	$('#calendar').fullCalendar({
      		header: {
      			left: 'prev,next today',
      			center: 'title',
      			right: 'month,agendaWeek,agendaDay'
      		},
      		editable: true,
      		droppable: true, // this allows things to be dropped onto the calendar
      		drop: function() {
      			// is the "remove after drop" checkbox checked?
      			if ($('#drop-remove').is(':checked')) {
      				// if so, remove the element from the "Draggable Events" list
      				$(this).remove();
      			}
      		}
      	});


      });
    </script>
@endsection
