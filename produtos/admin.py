from django.contrib import admin
from .models import Produto, OrderItem, Order, UserProfile

# Register your models here.
class OrderAdmin(admin.ModelAdmin):
    list_display = [
        'user', 'ordered',
    ]
    
    list_display_links = [
        'user'
    ]
    
    search_fields = [
        'user__username'
    ]

admin.site.register(Produto)
admin.site.register(OrderItem)
admin.site.register(Order, OrderAdmin)
admin.site.register(UserProfile)