from django.shortcuts import render, redirect
from django.http import HttpResponse
from django.contrib.auth.models import User
from django.contrib.auth import authenticate
from django.contrib.auth import login as login_django
from django.contrib.auth import logout as logout_django
from django.contrib.auth.decorators import login_required

def cadastro(request):
    if request.method == "GET":
        return render(request, 'Cadastro.html')
    else:
        username = request.POST.get('username')
        email = request.POST.get('email')
        password = request.POST.get('password')
    
        user = User.objects.filter(username=username).first()

        if user:
             return HttpResponse('Esse usuário já existe no sistema')
        
        user = User.objects.create_user(username=username, email=email, password=password)
        user.save()
        
        return HttpResponse('Usuário cadastrado com sucesso')

def login(request):
    if request.method == "GET":
        return render(request, 'Login.html')
    else:
        username = request.POST.get('username')
        password = request.POST.get('password')

        user = authenticate(username=username, password=password)

        if user:
            login_django(request, user)
            return redirect('MinhaConta')
        else:
            return redirect('Login')
        
def logout(request):
    logout_django(request)
    return redirect('index')
        
@login_required(login_url="/auth/login/") # O usuário não tem acesso ao MinhaConta, logo é enviado o local de Login
def conta(request):
    return render(request, 'conta/MinhaConta.html') # O usuário tem acesso, logo é redirecionado ao MinhaConta