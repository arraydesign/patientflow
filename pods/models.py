from django.db import models

class Pod(models.Model):
	name = models.CharField(max_length=60, blank=False, verbose_name='Pod')
	num_rooms = models.IntegerField()

	class Meta:
		verbose_name_plural = u'Pod'

	def __unicode__(self):
		return u'Pod: %s' % self.user.username

	def save(self, *args, **kwargs):
		super(Pod, self).save(*args, **kwargs)