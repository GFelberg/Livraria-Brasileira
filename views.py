# views.py
from django.http import JsonResponse
from .funcoes import get_books_from_database

def get_books(request):
    books = get_books_from_database()
    return JsonResponse({'books': books})
