from django.http import HttpResponse, HttpResponseRedirect, HttpResponseBadRequest
from django import http

from django.db.models import Q

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
		appts = Appointment.objects.filter(~Q(status="Completed"), ~Q(room__isnull=True) )

		mega_dict = {}

		for doctor in doctors:

			appointments = Appointment.objects.filter(doctor=doctor).order_by('order')

			mega_dict[doctor] = appointments

		context = super(ReceptionistView, self).get_context_data(**kwargs
			)
		context['add_doctor_form'] = add_doctor_form
		context['add_patient_form'] = add_patient_form
		context['doctors'] = doctors
		context['appts'] = appts
		context['mega_dict'] = mega_dict

		return context

class RoomView(TemplateView):
	template_name = "patientflow/room.html"

	def get_context_data(self, **kwargs):
		context = super(RoomView, self).get_context_data(**kwargs)
		body_color = None

		if 'rid' in self.kwargs:		
			rid = self.kwargs['rid']
			room = get_object_or_404(Room, id=rid)
			try:
				appointment = Appointment.objects.get(room=room)
		
				doctor = appointment.doctor
				appointments = Appointment.objects.filter(doctor=doctor).order_by('order')
			
				if appointment.room.status == "Waiting":
					button_title = 'Doctor Has Arrived'
					body_color = 'blue'
				
				elif appointment.room.status == "Cleaning":
					button_title = 'Cleaning Complete'
					body_color = 'yellow'
				
				elif appointment.room.status == "Occupied":
					button_title = 'Cleaning Required'
					body_color = 'red'

				elif appointment.room.status == "Available":
					button_title = 'Hide Me'
					body_color = 'green'
				
				elif appointment.room.status == "Unavailable":
					button_title = 'Cleaning Required'
					body_color = 'gray'

			except Exception, e:
				appointment = None
				appointments = None
				button_title = None
				doctor = None

			context['button_title'] = button_title
			context['doctor'] = doctor
			context['appointment'] = appointment
			context['appointments'] = appointments
			context['room'] = room
			context['body_color'] = body_color

		return context

class WaitingRoomView(TemplateView):
	template_name = "patientflow/waiting_room.html"

	def get_context_data(self, **kwargs):
		context = super(WaitingRoomView, self).get_context_data(**kwargs)
		
		appts = Appointment.objects.filter(~Q(status="Completed"), ~Q(room__isnull=True) )
		context['appts'] = appts

		return context