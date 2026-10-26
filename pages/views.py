import os

from django.shortcuts import render
from django.utils import timezone

VITE_DEV_SERVER_URL = "{}://{}:{}".format(
    os.environ["VITE_DEV_SERVER_PROTOCOL"],
    os.environ["VITE_DEV_SERVER_HOST"],
    os.environ["VITE_DEV_SERVER_PORT"],
)


def home(request):
    year = timezone.localdate().year
    return render(
        request,
        "pages/home.html",
        {
            "initial_state": {
                "year": year,
                "origin": request.build_absolute_uri("/").rstrip("/"),
            },
            "vite_dev_server_url": VITE_DEV_SERVER_URL,
        },
    )
