<?php $meta_title = 'Room View';
$basepage = 'room-001';
$baseclass = 'room';
include('header.php'); ?>


<!-- - - - - - - - - - CONTENT STARTS - - - - - - - - - -->

<div class="content">

	<section class="col-full" id="current">
		<p class="patient" id="patient-id-0000000">
			<span class="name">Firstname Lastname</span>
			<span class="practitioner-name">Dr. Keith Chung</span>
			<span class="room-number">001</span>
			<span class="arrived">11:25am</span>
			<span class="appt-start">11:30am</span>
			<span class="appt-length">11 / 20</span>
			<span class="waiting-time">04 / 05</span>
		</p>
		<form method="post" action="/rooms/action" id="room-action-form">
			<input type="hidden" value="olAC4uC0RgSWs7wRgnWgReZDHOHgRqKj" name="csrfmiddlewaretoken">
			<input type="hidden" value="" name="app_id">
			<input type="submit" value="[Action Word]" id="room-action">
		</form>
	</section>
	<section class="col-full manual" id="upcoming">
		<form method="post" class="practitioner working" action="/doctors/update" id="dr-keith-chung">
			<input type="hidden" value="1" name="doctor_id">
			<input type="hidden" value="Available" name="status">
			<input type="hidden" value="olAC4uC0RgSWs7wRgnWgReZDHOHgRqKj" name="csrfmiddlewaretoken">
			<p class="practitioner-name">Dr. Keith Chung</p>
			<ul class="inline patients">
				<li class="patient" id="patient-id-0000000">
					<span class="name">Firstname Lastname</span>
					<span class="practitioner-name">Dr. Keith Chung</span>
					<span class="room-number">- - -</span>
					<span class="appt-start">11:30am</span>
					<span class="arrived">(11:25am)</span>
					<span class="appt-length">11 / 20</span>
					<span class="waiting-time">04 / 05</span>
				</li>
				<li class="patient" id="patient-id-0000000">
					<span class="name">Firstname Lastname</span>
					<span class="practitioner-name">Dr. Keith Chung</span>
					<span class="room-number">- - -</span>
					<span class="appt-start">11:30am</span>
					<span class="arrived">(11:25am)</span>
					<span class="appt-length">11 / 20</span>
					<span class="waiting-time">04 / 05</span>
				</li>
				<li class="patient" id="patient-id-0000000">
					<span class="name">Firstname Lastname</span>
					<span class="practitioner-name">Dr. Keith Chung</span>
					<span class="room-number">- - -</span>
					<span class="appt-start">11:30am</span>
					<span class="arrived">(11:25am)</span>
					<span class="appt-length">11 / 20</span>
					<span class="waiting-time">04 / 05</span>
				</li>
				<li class="patient" id="patient-id-0000000">
					<span class="name">Firstname Lastname</span>
					<span class="practitioner-name">Dr. Keith Chung</span>
					<span class="room-number">- - -</span>
					<span class="appt-start">11:30am</span>
					<span class="arrived">(11:25am)</span>
					<span class="appt-length">11 / 20</span>
					<span class="waiting-time">04 / 05</span>
				</li>
			</ul>
		</form>
	</section>

</div><!-- END .content -->
<?php include('footer.php'); ?>