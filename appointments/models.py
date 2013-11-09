from django.db import models
from doctors.models import *
from patients.models import *
from rooms.models import *

class Appointment(models.Model):
	app_time = models.TimeField(max_length=50, blank=False, null=False)
	app_length = models.IntegerField(blank=False, null=False)
	status = models.IntegerField(blank=False, null=False)
	room = models.OneToOneField(Room)
	patient = models.OneToOneField(Patient)
	doctor = models.OneToOneField(Doctor)

	class Meta:
		verbose_name_plural = u'Appointment'

	def __unicode__(self):
		return u'Appointment : %s' % self.user.username

	def save(self, *args, **kwargs):
		super(Appointment, self).save(*args, **kwargs)
