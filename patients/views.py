from django.core.context_processors import csrf
from django.http import HttpResponse, HttpResponseRedirect, HttpResponseBadRequest
from django.shortcuts import render_to_response, get_object_or_404
from django.shortcuts import render

from appointments.models import *
from patients.models import *
from patients.forms import *

def add_patient(request):
	if request.method == 'POST':
		form = PatientForm(request.POST)

	if form.is_valid():
		first_name = form.cleaned_data['first_name']
		last_name = form.cleaned_data['last_name']
		doctor = form.cleaned_data['doctor']
		app_time = form.cleaned_data['app_time']
		app_length = form.cleaned_data['app_length']

		patient = Patient()
		patient.first_name = first_name
		patient.last_name = last_name
		patient.doctor = doctor
		patient.save()

		appointment = Appointment()
		appointment.app_time = app_time
		appointment.app_length = app_length
		appointment.patient = patient
		appointment.doctor = doctor
		appointment.save()

	return HttpResponseRedirect('/')