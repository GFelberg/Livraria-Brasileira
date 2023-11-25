from django.db import models

# Create your models here.
class Produto(models.Model):
    titulo = models.CharField(max_length=120)
    autor = models.CharField(max_length=255)
    descricao = models.TextField(blank=False, null=False)
    preco = models.DecimalField(decimal_places=2, max_digits=65)
    qtdDisponivel = models.IntegerField()
    status = models.CharField(max_length=120)