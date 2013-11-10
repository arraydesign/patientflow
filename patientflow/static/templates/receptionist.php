<?php $meta_title = 'Receptionist View';
$basepage = 'receptionist';
$baseclass = 'receptionist-view';
include('header.php'); ?>
	

<!-- - - - - - - - - - CONTENT STARTS - - - - - - - - - -->

<div class="content">

	<section class="col-half" id="rooms">
		<div class="room blue" id="room-001">
			<span class="room-number">001</span>
			<p class="patient" id="patient-id-0000000">
				<span class="name">Firstname Lastname</span>
				<span class="practitioner-name">Dr. Keith Chung</span>
				<span class="room-number">001</span>
				<span class="arrived">11:25am</span>
				<span class="appt-start">11:30am</span>
				<span class="appt-length">11 / 20</span>
				<span class="waiting-time">04 / 05</span>
			</p>
		</div>
		<div class="room red" id="room-002">
			<span class="room-number">002</span>
			<p class="patient" id="patient-id-0000000">
				<span class="name">Firstname Lastname</span>
				<span class="practitioner-name">Dr. Keith Chung</span>
				<span class="room-number">002</span>
				<span class="arrived">11:25am</span>
				<span class="appt-start">11:30am</span>
				<span class="appt-length">11 / 20</span>
				<span class="waiting-time">04 / 05</span>
			</p>
		</div>
		<div class="room green" id="room-003">
			<span class="room-number">003</span>
			<p class="patient" id="patient-id-0000000">
				<span class="name">- - - - - - - - -</span>
				<span class="practitioner-name">- - - - - - - - -</span>
				<span class="room-number">003</span>
				<span class="arrived">11:25am</span>
				<span class="appt-start">11:30am</span>
				<span class="appt-length">11 / 20</span>
				<span class="waiting-time">04 / 05</span>
			</p>
		</div>
		<div class="room yellow" id="room-004">
			<span class="room-number">004</span>
			<p class="patient" id="patient-id-0000000">
				<span class="name">- - - - - - - - -</span>
				<span class="practitioner-name">- - - - - - - - -</span>
				<span class="room-number">004</span>
				<span class="arrived">11:25am</span>
				<span class="appt-start">11:30am</span>
				<span class="appt-length">11 / 20</span>
				<span class="waiting-time">04 / 05</span>
			</p>
		</div>
		<div class="room gray" id="room-005">
			<span class="room-number">005</span>
			<p class="patient" id="patient-id-0000000">
				<span class="name">- - - - - - - - -</span>
				<span class="practitioner-name">- - - - - - - - -</span>
				<span class="room-number">005</span>
				<span class="arrived">11:25am</span>
				<span class="appt-start">11:30am</span>
				<span class="appt-length">11 / 20</span>
				<span class="waiting-time">04 / 05</span>
			</p>
		</div>
	</section>
	
	<section class="genbox col-half" id="practitioners">
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