# Generated by Django 4.2.7 on 2023-11-26 14:02

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('produtos', '0010_remove_order_start_time_order_ref_code_and_more'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='order',
            name='ref_code',
        ),
    ]
