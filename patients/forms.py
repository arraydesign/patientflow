import datetime
import re

from django import forms
from django.contrib.auth import authenticate

from doctors.models import *

APP_LENGTH = (('', 'Please select one...'),
	('5', '5'), 
	('10', '10'), 	
	('15', '15'), 	
	('20', '20'), 	
	('25', '25'), 	
	('30', '30'), 	
)

class PatientForm(forms.Form):
	first_name = forms.CharField(max_length=50, widget=forms.TextInput())
	last_name = forms.CharField(max_length=50, widget=forms.TextInput())
	doctor = forms.ModelChoiceField(queryset=Doctor.objects.all().exclude(status="Unavailable"))
	appt_time = forms.CharField(max_length=50, widget=forms.TextInput())
	appt_length = forms.ChoiceField(widget=forms.Select(), choices=APP_LENGTH)

	def __init__(self, *args, **kwargs):
		super(PatientForm, self).__init__(*args, **kwargs)
		self.fields['doctor'].label = "Practitioner"

	def clean(self):
		cleaned_data = super(PatientForm, self).clean()
		first_name = cleaned_data.get("first_name")
		last_name = cleaned_data.get("last_name")

		return cleaned_data