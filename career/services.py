from rest_framework.response import Response
from service_objects.services import Service
from rest_framework import status

from ang_career.common.constant import THANKYOU_FOR_APPLYING_WE_WILL_GET_BACK_TO_YOU_SOON, MESSAGE, \
    RECORD_CREATE_SUCCESSFULLY, ERROR, YOU_HAVE_ALREADY_APPLIED_FOR_THIS_POSITION
from .models import JobDescriptions, ClientDetails


class JobDescriptionService(Service):
    def process(self):
        title = self.data['title']
        description = self.data['description']
        qualification = self.data['qualification']
        employment_type = self.data['employment_type']
        JobDescriptions.objects.create(title=title, description=description, qualification=qualification,
                                       employment_type=employment_type)
        return Response({MESSAGE: RECORD_CREATE_SUCCESSFULLY}, status=status.HTTP_200_OK)


class ClientDescriptionService(Service):
    def process(self):
        job_id = self.data['job_id']
        job_obj = JobDescriptions.objects.get(id=job_id)
        name = self.data['name']
        email = self.data['email']
        contact_number = self.data['contact_number']
        upload_file = self.data['upload_file']
        obj = JobDescriptions.objects.filter(client_details__email=email, id=job_id)
        if obj.exists():
            return Response({ERROR: YOU_HAVE_ALREADY_APPLIED_FOR_THIS_POSITION},
                            status=status.HTTP_400_BAD_REQUEST)
        client_obj = ClientDetails.objects.create(name=name, email=email, contact_number=contact_number, upload_file=upload_file)
        job_obj.client_details.add(client_obj)
        return Response({MESSAGE: THANKYOU_FOR_APPLYING_WE_WILL_GET_BACK_TO_YOU_SOON}, status=status.HTTP_200_OK)
