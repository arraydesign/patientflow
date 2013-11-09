from django.http import HttpResponse, HttpResponseRedirect, HttpResponseBadRequest
from django import http

from django.shortcuts import render_to_response, get_object_or_404
from django.template.loader import get_template
from django.template import Context

from django.views.generic.base import TemplateView
from django.views.generic.edit import FormView


class ReceptionistView(TemplateView):
	template_name = "patientflow/receptionist.html"

	def get_context_data(self, **kwargs):
		context = super(ReceptionistView, self).get_context_data(**kwargs)
		return context

class RoomView(TemplateView):
	template_name = "patientflow/room.html"

	def get_context_data(self, **kwargs):
		context = super(ReceptionistView, self).get_context_data(**kwargs)
		return context

class WaitingRoomView(TemplateView):
	template_name = "patientflow/waiting_room.html"

	def get_context_data(self, **kwargs):
		context = super(ReceptionistView, self).get_context_data(**kwargs)
		return context