import datetime
import re

from django import forms
from django.contrib.auth.forms import UserCreationForm
from django.contrib.auth.models import User
from django.contrib.auth import authenticate

DOCTOR_STATUS = (('', 'Please select one...'),
	('Available', 'Available'), 
	('Unavailable', 'Unavailable'), 	
)

class DoctorForm(forms.Form):
	first_name = forms.CharField(max_length=50, widget=forms.TextInput())
	last_name = forms.CharField(max_length=50, widget=forms.TextInput())
	speciality = forms.CharField(max_length=50, widget=forms.TextInput())
	status = forms.ChoiceField(widget=forms.Select(), choices=DOCTOR_STATUS)

	def clean(self):
		cleaned_data = super(DoctorForm, self).clean()
		first_name = cleaned_data.get("first_name")
		last_name = cleaned_data.get("last_name")
		speciality = cleaned_data.get("speciality")
		status = cleaned_data.get("status")

		return cleaned_data