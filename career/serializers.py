from rest_framework import serializers

from career.models import JobDescriptions, ClientDetails


class JobDescriptionSerializer(serializers.ModelSerializer):
    class Meta:
        model = JobDescriptions
        fields = ("title", "description", "qualification", "employment_type")


class ClientDescriptionSerializer(serializers.ModelSerializer):
    job_id = serializers.IntegerField()

    class Meta:
        model = ClientDetails
        fields = ("job_id", "name", "email", "contact_number", "upload_file")


class JobTitleSerializer(serializers.ModelSerializer):
    class Meta:
        model = JobDescriptions
        fields = ("id", "title")

class GetJobDescriptionSerializer(serializers.ModelSerializer):
    class Meta:
        model = JobDescriptions
        fields = ("id","title", "description", "qualification", "employment_type")
