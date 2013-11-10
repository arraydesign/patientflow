from django.http import HttpResponse, HttpResponseRedirect, HttpResponseBadRequest
from django import http

from django.shortcuts import render_to_response, get_object_or_404
from django.template.loader import get_template
from django.template import Context
from django.views.generic.base import TemplateView
from django.views.generic.edit import FormView

from appointments.models import *
from doctors.models import *
from doctors.forms import *
from patients.models import *
from patients.forms import *

class ReceptionistView(TemplateView):
	template_name = "patientflow/receptionist.html"

	def get_context_data(self, **kwargs):
		add_doctor_form = DoctorForm()
		add_patient_form = PatientForm()
		doctors = Doctor.objects.all()

		mega_dict = {}

		for doctor in doctors:

			appointments = Appointment.objects.filter(doctor=doctor)

			mega_dict[doctor] = appointments

		context = super(ReceptionistView, self).get_context_data(**kwargs
			)
		context['add_doctor_form'] = add_doctor_form
		context['add_patient_form'] = add_patient_form
		context['doctors'] = doctors
		context['mega_dict'] = mega_dict

		return context

class RoomView(TemplateView):
	template_name = "patientflow/room.html"

	def get_context_data(self, **kwargs):
		context = super(RoomView, self).get_context_data(**kwargs)
		return context

class WaitingRoomView(TemplateView):
	template_name = "patientflow/waiting_room.html"

	def get_context_data(self, **kwargs):
		context = super(WaitingRoomView, self).get_context_data(**kwargs)
		return context