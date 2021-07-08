from django.shortcuts import render

# Create your views here.
def home(request):
    return render(request, 'donate.html')
def pay(request):
    return render(request, 'Pay.html')
def about(request):
    return render(request, 'about.html')
def contact(request):
    return render(request, 'contact.html')
def thankyou(request):
    return render(request, 'thankyou.html')
def mail(request):
    return render(request, 'mail.php')
def razor(request):
    return render(request, 'pay.php')