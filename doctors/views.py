from django.core.context_processors import csrf
from django.http import HttpResponse, HttpResponseRedirect, HttpResponseBadRequest
from django.shortcuts import render_to_response, get_object_or_404
from django.shortcuts import render

from doctors.models import *
from doctors.forms import *

def add_doctor(request):
	if request.method == 'POST':
		form = DoctorForm(request.POST)

	if form.is_valid():
		first_name = form.cleaned_data['first_name']
		last_name = form.cleaned_data['last_name']
		speciality = form.cleaned_data['speciality']
		status = form.cleaned_data['status']

		doctor = Doctor()
		doctor.first_name = first_name
		doctor.last_name = last_name
		doctor.speciality = speciality
		doctor.status = status
		doctor.save()

	return HttpResponseRedirect('/')

def update(request):

	if request.method == 'POST':

		doctor_id = request.POST['doctor_id']
		status = request.POST['status']

		if status == "Unavailable":
			status = "Available"
		elif status == "Available":
			status = "Unavailable"

		# return HttpResponse(u"%s %s" %(doctor_id, status))

		Doctor.objects.filter(id=doctor_id).update(status=status)

		return HttpResponse(status)

	return HttpResponseRedirect('/')