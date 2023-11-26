import random
import string

from django.conf import settings
from django.contrib import messages
from django.contrib.auth.decorators import login_required
from django.contrib.auth.mixins import LoginRequiredMixin
from django.core.exceptions import ObjectDoesNotExist
from django.shortcuts import redirect
from django.shortcuts import render, get_object_or_404
from django.utils import timezone
from django.views.generic import ListView, DetailView, View

from .models import Produto, OrderItem, Order, UserProfile

def index_view(request, *args, **kwargs):
    return render(request, "index.html", {})

def sobrenos_view(request,*args, **kwargs):
    return render(request, "iniciais/SobreNos.html", {})

def faleconosco_view(request,*args, **kwargs):
    return render(request, "iniciais/FaleConosco.html", {})

def obrigadocontato_view(request,*args, **kwargs):
    return render(request, "iniciais/ObrigadoContato.html", {})

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

def carrinho(request):
    return render(request, 'Carrinho.html')

def livro(request):
    return render(request, 'PaginaLivro.html')

def products(request):
    context = {
        'items': Produto.objects.all()
    }

    return render(request, "Carrinho.html", context)

def is_valid_form(values):
    valid = True
    for field in values:
        if field == '':
            valid = False
    return valid

class CarrinhoView(ListView):
    model = Produto
    paginate_by = 10
    template_name = "Carrinho.html"

class OrderSummaryView(LoginRequiredMixin, View):
    def get(self, *args, **kwargs):
        try:
            order = Order.objects.get(user=self.request.user, ordered=False)
            context = {
                'object': order
            }
            return render(self.request, 'Carrinho.html', context)
        except ObjectDoesNotExist:
            messages.warning(self.request, "Você não tem um pedido ativo.")
            return redirect("/")

class ItemDetailView(DetailView):
    model = Produto
    template_name = "PaginaLivro.html"

@login_required
def add_to_cart(request, slug):
    item = get_object_or_404(Produto, slug=slug)
    order_item, created = OrderItem.objects.get_or_create(
        item=item,
        user=request.user,
        ordered=False
    )
    order_qs = Order.objects.filter(user=request.user, ordered=False)
    if order_qs.exists():
        order = order_qs[0]
        # check if the order item is in the order
        if order.items.filter(item__slug=item.slug).exists():
            order_item.quantity += 1
            order_item.save()
            messages.info(request, "A quantidade do item foi atualizada.")
            return redirect("produtos:order-summary")
        else:
            order.items.add(order_item)
            messages.info(request, "O item foi adicionado ao seu carrinho.")
            return redirect("produtos:order-summary")
    else:
        ordered_date = timezone.now()
        order = Order.objects.create(
            user=request.user, ordered_date=ordered_date)
        order.items.add(order_item)
        messages.info(request, "Esse item já foi adicionado ao seu carrinho.")
        return redirect("produtos:order-summary")


@login_required
def remove_from_cart(request, slug):
    item = get_object_or_404(Produto, slug=slug)
    order_qs = Order.objects.filter(
        user=request.user,
        ordered=False
    )
    if order_qs.exists():
        order = order_qs[0]
        # check if the order item is in the order
        if order.items.filter(item__slug=item.slug).exists():
            order_item = OrderItem.objects.filter(
                item=item,
                user=request.user,
                ordered=False
            )[0]
            order.items.remove(order_item)
            order_item.delete()
            messages.info(request, "This item was removed from your cart.")
            return redirect("produtos:order-summary")
        else:
            messages.info(request, "This item was not in your cart")
            return redirect("produtos:product", slug=slug)
    else:
        messages.info(request, "You do not have an active order")
        return redirect("produtos:product", slug=slug)


@login_required
def remove_single_item_from_cart(request, slug):
    item = get_object_or_404(Produto, slug=slug)
    order_qs = Order.objects.filter(
        user=request.user,
        ordered=False
    )
    if order_qs.exists():
        order = order_qs[0]
        # check if the order item is in the order
        if order.items.filter(item__slug=item.slug).exists():
            order_item = OrderItem.objects.filter(
                item=item,
                user=request.user,
                ordered=False
            )[0]
            if order_item.quantity > 1:
                order_item.quantity -= 1
                order_item.save()
            else:
                order.items.remove(order_item)
            messages.info(request, "A quantidade do item foi atualizada.")
            return redirect("produtos:order-summary")
        else:
            messages.info(request, "Esse item não estava em seu carrinho.")
            return redirect("produtos:product", slug=slug)
    else:
        messages.info(request, "Você não tem um pedido ativo.")
        return redirect("produtos:product", slug=slug)
    

    



















