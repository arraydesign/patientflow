from django.db import models
from doctors.models import *
from patients.models import *
from rooms.models import *

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

	class Meta:
		verbose_name_plural = u'Appointment'

	def __unicode__(self):
		return u'Appointment : %s' % self.id

	def save(self, *args, **kwargs):
		super(Appointment, self).save(*args, **kwargs)