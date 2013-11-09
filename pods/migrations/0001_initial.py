# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding model 'Pod'
        db.create_table(u'pods_pod', (
            (u'id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
            ('name', self.gf('django.db.models.fields.CharField')(max_length=60)),
            ('num_rooms', self.gf('django.db.models.fields.IntegerField')()),
        ))
        db.send_create_signal(u'pods', ['Pod'])


    def backwards(self, orm):
        # Deleting model 'Pod'
        db.delete_table(u'pods_pod')


    models = {
        u'pods.pod': {
            'Meta': {'object_name': 'Pod'},
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'name': ('django.db.models.fields.CharField', [], {'max_length': '60'}),
            'num_rooms': ('django.db.models.fields.IntegerField', [], {})
        }
    }

    complete_apps = ['pods']