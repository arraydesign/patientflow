from django.conf.urls import patterns, include, url
from django.views.generic import TemplateView

urlpatterns = patterns('',
	url(r'^add-patient/?', 'patients.views.add_patient'),
	url(r'^assign-next-patient/?', 'patients.views.assign_next_patient'),
)