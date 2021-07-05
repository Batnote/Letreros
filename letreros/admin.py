from django.contrib import admin
from .models import tipo_contacto, tipo_servicio, Contacto
# Register your models here.
admin.site.register(tipo_contacto)
admin.site.register(tipo_servicio)
admin.site.register(Contacto)