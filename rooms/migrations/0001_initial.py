# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding model 'Room'
        db.create_table(u'rooms_room', (
            (u'id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
            ('number', self.gf('django.db.models.fields.CharField')(max_length=60)),
            ('status', self.gf('django.db.models.fields.CharField')(default='Unavailable', max_length=50)),
            ('pod', self.gf('django.db.models.fields.related.ForeignKey')(to=orm['pods.Pod'])),
        ))
        db.send_create_signal(u'rooms', ['Room'])


    def backwards(self, orm):
        # Deleting model 'Room'
        db.delete_table(u'rooms_room')


    models = {
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

    complete_apps = ['rooms']