from django.db import models

class Room(models.Model):
	number = models.CharField(max_length=60, blank=False, verbose_name='Room Number')
	status = models.CharField(max_length=50, blank=False, null=False, default="Unavailable")
	pod = models.OneToOneField(Pod)

	class Meta:
		verbose_name_plural = u'Room Number'

	def __unicode__(self):
		return u'Room Number: %s' % self.user.username

	def save(self, *args, **kwargs):
		super(Room, self).save(*args, **kwargs)