from django.urls import path
from . import views

urlpatterns = [
    path('cadastro/', views.cadastro, name='Cadastro'),
    path('login/', views.login, name='Login'),
    path('logout/', views.logout, name='logout'),
    path('minhaconta', views.conta, name='MinhaConta'),
]