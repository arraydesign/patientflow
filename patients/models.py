from django.db import models

class Patient(models.Model):
	first_name = models.CharField(max_length=50, blank=False)
	last_name = models.CharField(max_length=50, blank=False)
	arrival_time = models.DateTimeField(auto_now_add=True, blank=False, null=False)

	class Meta:
		verbose_name_plural = u'Patient'

	def __unicode__(self):
		return u'%s %s' % (self.first_name, self.last_name)

	def save(self, *args, **kwargs):
		super(Patient, self).save(*args, **kwargs)