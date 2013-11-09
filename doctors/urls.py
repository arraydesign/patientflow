from django.conf.urls import patterns, include, url
from django.views.generic import TemplateView

urlpatterns = patterns('',
	url(r'^add-doctor/?', 'doctors.views.add_doctor'),
	url(r'^update/?', 'doctors.views.update'),
)