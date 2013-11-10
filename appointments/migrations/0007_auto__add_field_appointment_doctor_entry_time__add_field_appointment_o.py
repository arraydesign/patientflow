# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding field 'Appointment.doctor_entry_time'
        db.add_column(u'appointments_appointment', 'doctor_entry_time',
                      self.gf('django.db.models.fields.DateTimeField')(null=True, blank=True),
                      keep_default=False)

        # Adding field 'Appointment.order'
        db.add_column(u'appointments_appointment', 'order',
                      self.gf('django.db.models.fields.IntegerField')(null=True, blank=True),
                      keep_default=False)


    def backwards(self, orm):
        # Deleting field 'Appointment.doctor_entry_time'
        db.delete_column(u'appointments_appointment', 'doctor_entry_time')

        # Deleting field 'Appointment.order'
        db.delete_column(u'appointments_appointment', 'order')


    models = {
        u'appointments.appointment': {
            'Meta': {'object_name': 'Appointment'},
            'app_length': ('django.db.models.fields.IntegerField', [], {}),
            'app_time': ('django.db.models.fields.DateTimeField', [], {'auto_now_add': 'True', 'null': 'True', 'blank': 'True'}),
            'doctor': ('django.db.models.fields.related.ForeignKey', [], {'to': u"orm['doctors.Doctor']"}),
            'doctor_entry_time': ('django.db.models.fields.DateTimeField', [], {'null': 'True', 'blank': 'True'}),
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'order': ('django.db.models.fields.IntegerField', [], {'null': 'True', 'blank': 'True'}),
            'patient': ('django.db.models.fields.related.ForeignKey', [], {'to': u"orm['patients.Patient']"}),
            'room': ('django.db.models.fields.related.ForeignKey', [], {'to': u"orm['rooms.Room']"}),
            'status': ('django.db.models.fields.CharField', [], {'max_length': '50'})
        },
        u'doctors.doctor': {
            'Meta': {'object_name': 'Doctor'},
            'first_name': ('django.db.models.fields.CharField', [], {'max_length': '50'}),
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'last_name': ('django.db.models.fields.CharField', [], {'max_length': '50'}),
            'speciality': ('django.db.models.fields.CharField', [], {'max_length': '50', 'null': 'True', 'blank': 'True'}),
            'status': ('django.db.models.fields.CharField', [], {'default': "'Unavailable'", 'max_length': '50'})
        },
        u'patients.patient': {
            'Meta': {'object_name': 'Patient'},
            'arrival_time': ('django.db.models.fields.DateTimeField', [], {'auto_now_add': 'True', 'blank': 'True'}),
            'first_name': ('django.db.models.fields.CharField', [], {'max_length': '50'}),
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'last_name': ('django.db.models.fields.CharField', [], {'max_length': '50'})
        },
        u'pods.pod': {
            'Meta': {'object_name': 'Pod'},
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'name': ('django.db.models.fields.CharField', [], {'max_length': '60'}),
            'num_rooms': ('django.db.models.fields.IntegerField', [], {})
        },
        u'rooms.room': {
            'Meta': {'object_name': 'Room'},
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'number': ('django.db.models.fields.CharField', [], {'max_length': '60'}),
            'pod': ('django.db.models.fields.related.ForeignKey', [], {'to': u"orm['pods.Pod']"}),
            'status': ('django.db.models.fields.CharField', [], {'default': "'Unavailable'", 'max_length': '50'})
        }
    }

    complete_apps = ['appointments']