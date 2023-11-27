# Create your views here.
from django.shortcuts import render

# Create your views here.
def index_view(request, *args, **kwargs):
    return render(request, "index.html", {})

def sobrenos_view(request,*args, **kwargs):
    return render(request, "iniciais/SobreNos.html", {})

def faleconosco_view(request,*args, **kwargs):
    return render(request, "iniciais/FaleConosco.html", {})

def obrigadocontato_view(request,*args, **kwargs):
    return render(request, "iniciais/ObrigadoContato.html", {})

def paginalivro_view(request):
    return render(request, "PaginaLivro.html")

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