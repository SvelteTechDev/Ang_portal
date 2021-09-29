from django.shortcuts import render
from rest_framework.response import Response
# Create your views here.
from rest_framework import status
from rest_framework import request
from rest_framework.views import APIView

from .models import JobDescriptions
from .serializers import JobDescriptionSerializer, ClientDescriptionSerializer, JobTitleSerializer, \
    GetJobDescriptionSerializer
from .services import JobDescriptionService, ClientDescriptionService


class JobDescriptionListView(APIView):
    @staticmethod
    def post(request):
        serializer = JobDescriptionSerializer(data=request.data)
        if serializer.is_valid(raise_exception=True):
            return JobDescriptionService.execute(serializer.validated_data)

    @staticmethod
    def get(_):
        list = JobDescriptions.objects.all()
        return Response(JobTitleSerializer(list, many=True).data, status=status.HTTP_200_OK)


class ClientDescriptionListView(APIView):
    @staticmethod
    def post(request):
        serializer = ClientDescriptionSerializer(data=request.data)
        if serializer.is_valid(raise_exception=True):
            return ClientDescriptionService.execute(serializer.validated_data)


class JobDescriptionDetailView(APIView):
    @staticmethod
    def get(_, job_id):
        obj = JobDescriptions.objects.get(id=job_id)
        return Response(GetJobDescriptionSerializer(obj).data, status=status.HTTP_200_OK)


