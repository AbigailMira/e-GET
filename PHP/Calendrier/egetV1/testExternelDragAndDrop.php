<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="StyleDragExt.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- fullcalendar CSS -->
		<link href='css/fullcalendar.min.css' rel='stylesheet' />
		<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
		<script src='js/moment.min.js'></script>
		<!--<script src='js/jquery.min.js'></script>-->
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> <!-- a retenir pour la version de jquery-->
		
		<script src='js/jquery-ui.min.js'></script>
		<script src='js/bootstrap.min.js'></script>
		
		<script src='js/fullcalendar.min.js'></script>
		<script src='js/locale/fr.js'></script>	
</head>
<body>
  <div id='wrap'>

        <div id='external-events'>
          <div id='external-events-listing'>
            <h4>Draggable Events</h4>
            <div class='fc-event'>My Event 1</div>
            <div class='fc-event'>My Event 2</div>
            <div class='fc-event'>My Event 3</div>
            <div class='fc-event'>My Event 4</div>
            <div class='fc-event'>My Event 5</div>
          </div>
          <p>
            <input type='checkbox' id='drop-remove' checked='checked' />
            <label for='drop-remove'>remove after drop</label>
          </p>
        </div>

        <div id='calendar'></div>

        <div style='clear:both'></div>

    </div>
	<script>
	$(document).ready(function() {


        /* initialize the external events
        -----------------------------------------------------------------*/

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


        /* initialize the calendar
        -----------------------------------------------------------------*/

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            dragRevertDuration: 0,
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            eventDragStop: function( event, jsEvent, ui, view ) {
                
                if(isEventOverDiv(jsEvent.clientX, jsEvent.clientY)) {
                    $('#calendar').fullCalendar('removeEvents', event._id);
                    var el = $( "<div class='fc-event'>" ).appendTo( '#external-events-listing' ).text( event.title );
                    el.draggable({
                      zIndex: 999,
                      revert: true, 
                      revertDuration: 0 
                    });
                    el.data('event', { title: event.title, id :event.id, stick: true });
                }
            }
        });


        var isEventOverDiv = function(x, y) {

            var external_events = $( '#external-events' );
            var offset = external_events.offset();
            offset.right = external_events.width() + offset.left;
            offset.bottom = external_events.height() + offset.top;

            // Compare
            if (x >= offset.left
                && y >= offset.top
                && x <= offset.right
                && y <= offset .bottom) { return true; }
            return false;

        }


    });
	</script>
</body>
</html>