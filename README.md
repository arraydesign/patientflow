# Patient Flow

The aim is to have django models for all key data to power
all website operations (profiles, subscribe/unsubscribe, etc.) and all
backoffice operations (shipping, refunds, etc.).

## Requirements

You must have Python >= 2.6 < 3.0 installed, with setuptools or distribute
(latest).

Confirm you have python installed with the correct version by executing:

    python --version

## Getting Started

To get started, clone the git repo to your local workstation.

Included in this config file is the database information. You may need to
install MySQL at this point, and create a new database.

Next, create a local version of python.

    virtualenv -p python2.7 .

Put the local version of Python in your path.
(You will have to do this every time you use the project.)

    source venv/bin/activate

To stop using the local version of python:

    deactivate

To install Django Heroku-Toolbelt:
	
	pip install django-toolbelt

To install all python requirements:
    
    pip install --requirement requirements.txt

To update database tables:
    
    python manage.py schemamigration appointments --initial
    python manage.py schemamigration appointments --auto
    python manage.py schemamigration appointments --help

    heroku run python manage.py migrate userorganization --app patientflow

To run the django development server, you will first need to setup the database:

    python manage.py syncdb

This loads default data into the database as defined by fixtures within
the `users` app.

At this point you are ready to run the development server:

    python manage.py runserver --noreload 0.0.0.0:10000

Above, the `--noreload` argument is optional, and prevents django from reloading
every time you make a code change. Now the development web server should be
running. Try it by connecting via a web browser:

    http://localhost:10000
