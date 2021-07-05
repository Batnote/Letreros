from rest_framework import serializers
from letreros.models import Contacto

class ContactoSerializer(serializers.ModelSerializer):
    class Meta:
        model = Contacto
        fields = ['id_contacto', 'nombre', 'id_tipo_cont', 'id_tipo_servicio', 'correo', 'mensaje']