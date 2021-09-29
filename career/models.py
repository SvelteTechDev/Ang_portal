from django.db import models


# Create your models here.


class ClientDetails(models.Model):
    name = models.CharField(max_length=255)
    email = models.EmailField(max_length=254, blank=True, null=True)
    contact_number = models.IntegerField(blank=True, null=True)
    upload_file = models.FileField(upload_to='portal/client_cv/')


class JobDescriptions(models.Model):
    title = models.CharField(max_length=255)
    description = models.TextField()
    qualification = models.TextField()
    employment_type = models.CharField(max_length=255)
    created_at = models.DateTimeField(auto_now_add=True)
    client_details = models.ManyToManyField(ClientDetails, related_name='job_client_details', blank=True)
