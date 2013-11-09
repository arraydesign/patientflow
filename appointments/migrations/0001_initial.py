# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding model 'Appointment'
        db.create_table(u'appointments_appointment', (
            (u'id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
            ('app_time', self.gf('django.db.models.fields.TimeField')(max_length=50)),
            ('app_length', self.gf('django.db.models.fields.IntegerField')()),
            ('status', self.gf('django.db.models.fields.IntegerField')()),
            ('room', self.gf('django.db.models.fields.related.OneToOneField')(to=orm['rooms.Room'], unique=True)),
            ('patient', self.gf('django.db.models.fields.related.OneToOneField')(to=orm['patients.Patient'], unique=True)),
            ('doctor', self.gf('django.db.models.fields.related.OneToOneField')(to=orm['doctors.Doctor'], unique=True)),
        ))
        db.send_create_signal(u'appointments', ['Appointment'])


    def backwards(self, orm):
        # Deleting model 'Appointment'
        db.delete_table(u'appointments_appointment')


    models = {
        u'appointments.appointment': {
            'Meta': {'object_name': 'Appointment'},
            'app_length': ('django.db.models.fields.IntegerField', [], {}),
            'app_time': ('django.db.models.fields.TimeField', [], {'max_length': '50'}),
            'doctor': ('django.db.models.fields.related.OneToOneField', [], {'to': u"orm['doctors.Doctor']", 'unique': 'True'}),
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'patient': ('django.db.models.fields.related.OneToOneField', [], {'to': u"orm['patients.Patient']", 'unique': 'True'}),
            'room': ('django.db.models.fields.related.OneToOneField', [], {'to': u"orm['rooms.Room']", 'unique': 'True'}),
            'status': ('django.db.models.fields.IntegerField', [], {})
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
            'pod': ('django.db.models.fields.related.OneToOneField', [], {'to': u"orm['pods.Pod']", 'unique': 'True'}),
            'status': ('django.db.models.fields.CharField', [], {'default': "'Unavailable'", 'max_length': '50'})
        }
    }

    complete_apps = ['appointments']