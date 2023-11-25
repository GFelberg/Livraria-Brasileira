# Create your views here.
from django.shortcuts import render, redirect
from django.http import HttpResponse
from django.contrib.auth.models import User
from django.contrib import messages

# Create your views here.
def index_view(request, *args, **kwargs):
    return render(request, "index.html", {})


def sobrenos_view(request,*args, **kwargs):
    return render(request, "iniciais/SobreNos.html", {})

def faleconosco_view(request,*args, **kwargs):
    return render(request, "iniciais/FaleConosco.html", {})

def obrigadocontato_view(request,*args, **kwargs):
    return render(request, "iniciais/ObrigadoContato.html", {})


def cadastro_view(request):
    return render(request, 'conta/Cadastro.html', {})

def login_view(request):
    return render(request, 'conta/Login.html', {})

def minhaconta_view(request,*args, **kwargs):
    return render(request, "conta/MinhaConta.html", {})


def carrinho_view(request,*args, **kwargs):
    return render(request, "Carrinho.html", {})

def paginalivro_view(request,*args, **kwargs):
    return render(request, "PaginaLivro.html", {})


def desenvolvimento_pessoal_view(request, *args, **kwargs):
    return render(request, "acervos/DesenvolvimentoPessoal.html")

def educacao_view(request, *args, **kwargs):
    return render(request, "acervos/Educacao.html")

def ficcao_view(request, *args, **kwargs):
    return render(request, "acervos/Ficcao.html")

def infantil_view(request, *args, **kwargs):
    return render(request, "acervos/Infantil.html")

def informatica_view(request, *args, **kwargs):
    return render(request, "acervos/Informatica.html")

def mangas_view(request, *args, **kwargs):
    return render(request, "acervos/Mangas.html")