from django.db import models

class Doctor(models.Model):
	first_name = models.CharField(max_length=50, blank=False, null=False)
	last_name = models.CharField(max_length=50, blank=False, null=False)
	speciality = models.CharField(max_length=50, blank=True, null=True)
	status = models.CharField(max_length=50, blank=False, null=False, default="Unavailable")

	class Meta:
		verbose_name_plural = u'Doctor'

	def __unicode__(self):
		return u'Dr. %s %s' % (self.first_name, self.last_name)

	def save(self, *args, **kwargs):
		super(Doctor, self).save(*args, **kwargs)