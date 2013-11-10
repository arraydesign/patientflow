import datetime

from django.core.context_processors import csrf
from django.http import HttpResponse, HttpResponseRedirect, HttpResponseBadRequest
from django.shortcuts import render_to_response, get_object_or_404
from django.shortcuts import render

from appointments.models import *
from patients.models import *
from patients.forms import *
from rooms.models import *

def action(request):
	if request.method == "POST":
		app_id = request.POST['app_id']
		appointment = Appointment.objects.get(id=app_id)
		
		if appointment.room.status == "Waiting":
			print "1"
			appointment.room.status = "Occupied"
			appointment.doctor_entry_time = datetime.datetime.now()
			
			appointment.room.save()
			appointment.save()
		
		elif appointment.room.status == "Cleaning":
			print "2"
			appointment.room.status = "Available"

			appointment.room.save()

		elif appointment.room.status == "Occupied":
			print "3"
			appointment.room.status = "Cleaning"
			appointment.status = "Completed"
			
			appointment.room.save()
			appointment.save()

		elif appointment.room.status == "Available":
			print "4"
			pass
		
		elif appointment.room.status == "Unavailable":
			print "5"
			appointment.room.status = "Cleaning"
			appointment.room.save()

	# return self.render_to_response(self.get_context_data(form=form))
	return HttpResponseRedirect(u'/room/%s' %(appointment.room.id))