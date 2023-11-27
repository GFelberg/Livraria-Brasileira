from django.urls import path
from . import views

urlpatterns = [
    path("cart/", views.cart, name="Carrinho"),
    path("add_to_cart", views.add_to_cart, name= "add"),
    path("confirm_payment/<str:pk>", views.confirm_payment, name="add")
]