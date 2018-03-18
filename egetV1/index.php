<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>e-Get - Aceuille</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/e-Get_style-calendar.css">
		<!-- Bootstrap Core CSS -->
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
		<div class="container-fluid">
		<!-- Bandeau identification : logo + personne connectée -->
			<div id="header" class="row">
				<h1>e-Get</h1>
				<p>Bienvenue +identifiant+</p>
			</div>

		<!-- Menu du haut -->
			<?php include('Includes/eg_menu.php'); ?>


		<!-- Section principale : affichage de la grille -->

			<?php include('Includes/eg_asidenav.php'); ?>

				<div id="grille"  class="col-lg-10">

				<div id='calendar'>
				<style type="text/css">
				.fc-time-grid .fc-slats td {
    			height: 0.7em;
				}</style>
				</div>

				</div>
				<?php include('modalAjouterSeance.php'); ?>
				<?php include('modalMajSeance.php'); ?>
				<?php include('Alerts.php'); ?>



			</div>
		<a href="#top" class="to-top"><i class="glyphicon glyphicon-chevron-up"></i></a>
		<style>
			.to-top{
				position:absolute;
				bottom:20px;
				right:20px;
				background:#000;
				color:#fff;


			}
			.to-top:hover{
				background:#d7d7d7;
				color:#000;
			}
		</style>
		<!-- Footer : mentions légales et crédits -->
		<?php include('Includes/footer.php'); ?>
		</div>
	<script>

  $(document).ready(function() {

    var calendar = $('#calendar').fullCalendar({
		lang:'fr',
		themeSystem:'bootstrap3',
		minTime: '08:00:00',
        maxTime: '18:00:00',
		fixedWeekCount:false,
		weekMode:'variable',
		slotDuration:'00:15:00',
		slotLabelInterval:'01:00:00',
		allDaySlot: false,
		defaultView:'agendaWeek',
		height: 650,
		contentHeight: 600,

		header: {
		left: 'prev,next today',
		center: 'title',
		right: 'month,agendaWeek,agendaDay'
		},


      editable: true,
      eventLimit: true, // allow "more" link when too many events
	  events:"http://localhost/egetV1/seances.php",
	  selectable: true,
	 selectHelper: true,
			select: function(start, end) {

				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},
	editable: true,
	eventDrop: function(event, delta) {
	 start = $.fullCalendar.formatDate(event.start, 'YYYY-MM-DD HH:mm:ss');
	 end = $.fullCalendar.formatDate(event.end, 'YYYY-MM-DD HH:mm:ss');
	 $.ajax({
	 url: 'http://localhost/egetV1/MAJ_seance.php',
	 data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
	 type: "POST",
	 success: function(json) {
	 //alert("OK");

	 $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
   			$("#success-alert").slideUp(500);
					});
	 }
	 });
	},
	eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit #user').val(event.user);
					$('#ModalEdit').modal('show');
				});
			},
	eventResize: function(event) {
	 start = $.fullCalendar.formatDate(event.start, 'YYYY-MM-DD HH:mm:ss');
	 end = $.fullCalendar.formatDate(event.end, 'YYYY-MM-DD HH:mm:ss');
	 $.ajax({
	 url: 'http://localhost/egetV1/MAJ_seance.php',
	 data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
	 type: "POST",
	 success: function(json) {
	 $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    			$("#success-alert").slideUp(500);
					});
	 }
	 });

	}

    });

  });

</script>

	</body>
</html>
