from django.urls import path
from paginas.views import index_view 
from paginas.views import sobrenos_view, faleconosco_view, obrigadocontato_view
from paginas.views import carrinho_view, paginalivro_view
from paginas.views import desenvolvimento_pessoal_view, educacao_view, ficcao_view, infantil_view, informatica_view, mangas_view

urlpatterns = [
    path('', index_view, name='index'),
    path('sobrenos/', sobrenos_view, name='SobreNos'),
    path('faleconosco/', faleconosco_view, name='FaleConosco'),
    path('obrigado/', obrigadocontato_view, name='ObrigadoContato'),


    path("livro/", paginalivro_view, name='PaginaLivro'),
    path('carrinho/', carrinho_view, name='Carrinho'),

    path('desenvolvimentopessoal/', desenvolvimento_pessoal_view, name='DesenvolvimentoPessoal'),
    path('educacao/', educacao_view, name='Educacao'),
    path('ficcao/', ficcao_view, name='Ficcao'),
    path('infantil/', infantil_view, name='Infantil'),
    path('informatica/', informatica_view, name='Informatica'),
    path('mangas/', mangas_view, name='Mangas'),
]