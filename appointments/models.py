from django.db import models

from doctors.models import Doctor
from patients.models import Patient
from rooms.models import Room

APPOINTMENT_STATUS = (('', 'Please select one...'),
	('Available', 'Available'), 
	('Unavailable', 'Unavailable'), 	
)

class Appointment(models.Model):
	app_time = models.DateTimeField(auto_now_add=True, blank=True, null=True)
	app_length = models.IntegerField(blank=False, null=False)
	status = models.IntegerField(blank=False, null=False)
	room = models.ForeignKey(Room, blank=False, null=False)
	patient = models.ForeignKey(Patient, blank=False, null=False)
	doctor = models.ForeignKey(Doctor, blank=False, null=False)
	status = models.CharField(max_length=50, blank=False, null=False)
	doctor_entry_time = models.DateTimeField(blank=True, null=True)
	order = models.IntegerField(blank=True, null=True)

	class Meta:
		verbose_name_plural = u'Appointment'

	def __unicode__(self):
		return u'Appointment : %s' % self.id

	def assign_room(self, room_id):
		room = Room.objects.get(id=room_id)

		if room.status == "Available":
			room.status = "Waiting"
			room.save()

			appointment = Appointment.objects.get(patient=self.patient)
			appointment.room = room
			appointment.status = "ExamRoom"
			appointment.save()

	def calculate_order(self):
		appointments = Appointment.objects.filter(doctor=self.doctor).exclude(status="Completed", doctor_entry_time__isnull=False)
		
		try:
			max_order = Appointment.objects.get(doctor=self.doctor).exclude(status="Completed", doctor_entry_time__isnull=False).order_by('-order')
		except Exception, e:
			max_order = 0
		

		if not appointments:
			return 1
		else:
			return int(max_order) + 1

		# We said fuck it
		# else:
		# 	min_i = -1
		# 	min_value = sys.maxint

		# 	for appointment in appointments:
		# 		sum = self.app_length * (len(appointments) - 1)

		# 		for appointment2 in appointments

		return 1

	def assign_next_patient(self):
		available_rooms = Room.objects.filter(status="Available")
		
		if available_rooms:
			selected_room = available_rooms[0]
			doctors = Doctor.objects.all()

			for doctor in doctors:
				patient_queue = Appointment.objects.filter(doctor=doctor, status="WaitingRoom").order_by('order')

				if patient_queue:
					patient_queue[0].assign_room(selected_room.id)
					return True

		return False

	def save(self, *args, **kwargs):
		super(Appointment, self).save(*args, **kwargs)