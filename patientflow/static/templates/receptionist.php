<?php $meta_title = 'Receptionist View';
$basepage = 'receptionist';
$baseclass = 'receptionist-view';
include('header.php'); ?>
	
<!-- - - - - - - - - - MODALS - - - - - - - - - -->

<div id="add-practitioner" style="display: none;">
	<form method="post" action="/doctors/add-doctor"><input type="hidden" value="olAC4uC0RgSWs7wRgnWgReZDHOHgRqKj" name="csrfmiddlewaretoken">
        <div class="fieldrow text-row">
			<label for="id_first_name">First name:</label>
			<input type="text" name="first_name" maxlength="50" id="id_first_name">
		</div>
		<div class="fieldrow text-row">
			<label for="id_last_name">Last name:</label>
			<input type="text" name="last_name" maxlength="50" id="id_last_name">
		</div>
		<div class="fieldrow text-row">
			<label for="id_speciality">Speciality:</label>
			<input type="text" name="speciality" maxlength="50" id="id_speciality">
		</div>
		<div class="fieldrow select-row">
			<label for="id_status">Status:</label>
			<select name="status" id="id_status">
				<option selected="selected" value="">- - select one - -</option>
				<option value="Available">Available</option>
				<option value="Unavailable">Unavailable</option>
			</select>
		</div>
		<input type="submit" value="Submit">
	</form>
</div>
<div id="add-patient" style="display: none;">
	<form method="post" action="/patients/add-patient"><input type="hidden" value="olAC4uC0RgSWs7wRgnWgReZDHOHgRqKj" name="csrfmiddlewaretoken">
		<div class="fieldrow text-row">
			<label for="id_first_name">First name:</label>
			<input type="text" name="first_name" maxlength="50" id="id_first_name">
		</div>
		<div class="fieldrow text-row">
			<label for="id_last_name">Last name:</label>
			<input type="text" name="last_name" maxlength="50" id="id_last_name">
		</div>
		<div class="fieldrow select-row">
			<label for="id_doctor">Practitioner:</label>
			<select name="doctor" id="id_doctor">
				<option selected="selected" value="">- - select one - -</option>
				<option value="4">Dr. Keith Chung</option>
			</select>
		</div>
		<div class="fieldrow text-row">
			<label for="id_app_time">App time:</label>
			<input type="text" name="app_time" maxlength="50" id="id_app_time">
		</div>
		<div class="fieldrow select-row">
			<label for="id_app_length">App length:</label><select name="app_length" id="id_app_length">
				<option selected="selected" value="">- - select one - -</option>
				<option value="5">5</option>
				<option value="10">10</option>
				<option value="15">15</option>
				<option value="20">20</option>
				<option value="25">25</option>
				<option value="30">30</option>
			</select>
		</div>
        <input type="submit" value="Submit">
	</form>
</div>

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
					<span class="room-number">301</span>
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