from django.db.models.signals import post_save
from django.db import models
from django.conf import settings
from django.shortcuts import reverse

# Create your models here.
class UserProfile(models.Model):
    user = models.OneToOneField(settings.AUTH_USER_MODEL, on_delete=models.CASCADE)
    stripe_customer_id = models.CharField(max_length=50, blank=True, null=True)
    one_click_purchasing = models.BooleanField(default=False)

    def __str__(self):
        return self.user.username
    
class Produto(models.Model):
    titulo = models.CharField(max_length=120)
    autor = models.CharField(max_length=255)
    descricao = models.TextField(blank=False, null=False)
    preco = models.DecimalField(decimal_places=2, max_digits=65)
    qtdDisponivel = models.IntegerField()
    status = models.CharField(max_length=120)
    image = models.ImageField()

    def __str__(self):
        return self.titulo
    
    def get_absolute_url(self):
        return reverse("produtos:product", kwargs={'slug': self.slug})

    def get_add_to_cart_url(self):
        return reverse("produtos:add-to-cart", kwargs={'slug': self.slug})

    def get_remove_from_cart_url(self):
        return reverse("produtos:remove-from-cart", kwargs={'slug': self.slug})

class OrderItem(models.Model):

    user = models.ForeignKey(settings.AUTH_USER_MODEL, on_delete=models.CASCADE)
    ordered = models.BooleanField(default=False)
    item = models.ForeignKey(Produto, on_delete=models.CASCADE)
    quantity = models.IntegerField(default=1)

    def __str__(self):
        return f"{self.quantity} of {self.item.titulo}"

    def get_total_item_price(self):
        return self.quantity * self.item.price

    def get_amount_saved(self):
        return self.get_total_item_price()

    def get_final_price(self):
        return self.get_total_item_price()

class Order(models.Model):
    user = models.ForeignKey(settings.AUTH_USER_MODEL, on_delete=models.CASCADE)
    items = models.ManyToManyField(OrderItem)
    ordered_date = models.DateTimeField()
    ordered = models.BooleanField(default=False)

    def __str__(self):
        return self.user.username

    def get_total(self):
        total = 0
        for order_item in self.items.all():
            total += order_item.get_final_price()
        return total
    
def userprofile_receiver(sender, instance, created, *args, **kwargs):
    if created:
        userprofile = UserProfile.objects.create(user=instance)


post_save.connect(userprofile_receiver, sender=settings.AUTH_USER_MODEL)