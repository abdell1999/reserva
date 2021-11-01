<?php
echo "<link href='assets/fullcalendar/main.css' rel='stylesheet' />
<script src='assets/fullcalendar/main.js'></script>";


echo "<script>

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth'
  });
  calendar.render();
});

</script>";


echo "<div id='calendar'></div>";


