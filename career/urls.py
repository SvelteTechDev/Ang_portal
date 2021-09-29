from django.urls import path

from career.views import JobDescriptionListView, ClientDescriptionListView, JobDescriptionDetailView

urlpatterns = [
    path('createJobDescription/', JobDescriptionListView.as_view(), name="job_details"),
    path('createClientDescription/', ClientDescriptionListView.as_view(), name="job_details"),
    path('detailJobDescription/<int:job_id>/', JobDescriptionDetailView.as_view(), name='job_detail_description')
]