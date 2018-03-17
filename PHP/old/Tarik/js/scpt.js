<script>

  $(document).ready(function() {

    var calendar = $('#calendar').fullCalendar({
		lang:'fr',
		themeSystem:'bootstrap3',
		minTime: '08:00:00',
        maxTime: '18:00:00',
	     
		header: {
		left: 'prev,next today',
		center: 'title',
		right: 'month,agendaWeek,agendaDay'
		},

      defaultDate: '2018-03-12',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
	  events:"http://localhost/fullcalender/events.php",
	  selectable: true,
	 selectHelper: true,
	 select: function(start, end, allDay) {
	 var title = prompt('Event Title:');
	 if (title) {
	  //start=moment(start).format('YYYY-MM-DD hh:mm'); 
      // end=moment(end).format('YYYY-MM-DD hh:mm');
	   start=moment(start).format('YYYY-MM-DD HH:mm:ss'); 
        end=moment(end).format('YYYY-MM-DD HH:mm:ss'); 
	 $.ajax({
	 url: 'http://localhost/fullcalender/add_events.php',
	 data: 'title='+ title+'&start='+ start +'&end='+ end ,
	 type: "POST",
	 success: function(json) {
	 alert('OK');
	 }
	 });
	 calendar.fullCalendar('renderEvent',
	 {
	 title: title,
	 start: start,
	 end: end,
	 allDay: allDay
	 },
	 true // make the event "stick"
	 );
	 }
	 calendar.fullCalendar('unselect');
	},
	editable: true,
	eventDrop: function(event, delta) {
	 start = $.fullCalendar.formatDate(event.start, 'YYYY-MM-DD HH:mm:ss');
	 end = $.fullCalendar.formatDate(event.end, 'YYYY-MM-DD HH:mm:ss');
	 $.ajax({
	 url: 'http://localhost/fullcalender/update_events.php',
	 data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
	 type: "POST",
	 success: function(json) {
	 alert("OK");
	 }
	 });
	},
	eventResize: function(event) {
	 start = $.fullCalendar.formatDate(event.start, 'YYYY-MM-DD HH:mm:ss');
	 end = $.fullCalendar.formatDate(event.end, 'YYYY-MM-DD HH:mm:ss');
	 $.ajax({
	 url: 'http://localhost/fullcalender/update_events.php',
	 data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
	 type: "POST",
	 success: function(json) {
	 alert("OK");
	 }
	 });
	 
	}
      
    });

  });

</script>
