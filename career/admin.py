from django.contrib import admin

# Register your models here.
from career.models import JobDescriptions, ClientDetails
from django_summernote.admin import SummernoteModelAdmin


# creating admin class
class JobDescriptionsadmin(SummernoteModelAdmin):
    summernote_fields = ('qualification', "description")


admin.site.register(JobDescriptions, JobDescriptionsadmin)
admin.site.register(ClientDetails)