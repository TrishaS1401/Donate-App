from django.contrib import admin
from django.urls import path
from dapp import views

urlpatterns = [
    path("",views.home, name="home"),
    path("home",views.home, name="home"),
    path("pay",views.pay, name="pay"),
    path("about",views.about, name="about"),
    path("contact",views.contact, name="contact"),
    path("thankyou",views.thankyou, name="thankyou"),
    path("mail",views.mail, name="mail"),
    path("razor",views.razor, name="razor"),
]
