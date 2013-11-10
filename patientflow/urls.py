from django.conf.urls import patterns, include, url
from django.conf import settings
from django.contrib import admin
from django.views.generic import TemplateView

from patientflow.views import *

admin.autodiscover()

urlpatterns = patterns('',
	url(r'^admin/doc/', include('django.contrib.admindocs.urls')),
	url(r'^admin/', include(admin.site.urls)),

	url(r'^appointments/', include('appointments.urls')),
	url(r'^doctors/', include('doctors.urls')),
	url(r'^patients/', include('patients.urls')),
	url(r'^pods/', include('pods.urls')),
	url(r'^rooms/', include('rooms.urls')),

	url(r'^$', ReceptionistView.as_view()),
	url(r'^room/(?P<rid>\d+)/?$', RoomView.as_view()),
	url(r'^room/', RoomView.as_view()),
	url(r'^waiting-room/', WaitingRoomView.as_view()),
)

if settings.DEBUG:
	urlpatterns += patterns('django.contrib.staticfiles.views',
		url(r'^static/(?P<path>.*)$', 'serve'),
	)