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

		# print appts

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

		if 'rid' in self.kwargs:		
			rid = self.kwargs['rid']
			room = get_object_or_404(Room, id=rid)
			try:
				appointment = Appointment.objects.get(room=room)
		
				doctor = appointment.doctor
				appointments = Appointment.objects.filter(doctor=doctor).order_by('order')
			
				if appointment.room.status == "Waiting":
					button_title = 'The Doctor Has Arrived'
				
				elif appointment.room.status == "Cleaning":
					button_title = 'Cleaning Complete'
				
				elif appointment.room.status == "Occupied":
					button_title = 'Cleaning Required'

				elif appointment.room.status == "Available":
					button_title = 'Hide Me'
				
				elif appointment.room.status == "Unavailable":
					button_title = 'Cleaning Required'

			except Exception, e:
				print e
				appointment = None
				appointments = None
				button_title = None
				doctor = None


			context['button_title'] = button_title
			context['doctor'] = doctor
			context['appointment'] = appointment
			context['appointments'] = appointments
			context['room'] = room

		return context

class WaitingRoomView(TemplateView):
	template_name = "patientflow/waiting_room.html"

	def get_context_data(self, **kwargs):
		context = super(WaitingRoomView, self).get_context_data(**kwargs)
		return context