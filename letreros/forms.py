from django import forms
from django.contrib.auth.forms import UserCreationForm
from django.contrib.auth.models import User
from django.forms import ModelForm, widgets
from .models import *

class Contactoform(ModelForm):
    class Meta:
        model = Contacto
        fields = ['nombre', 'id_tipo_cont', 'id_tipo_servicio', 'correo', 'mensaje']
        labels = {
            'nombre':'Nombre',
            'id_tipo_cont':'Tipo Contacto',
            'id_tipo_servicio':'Tipo Servicio',
            'correo':'Correo',
            'mensaje':'Mensaje',
        }
        widgets = {
            'nombre': forms.TextInput(attrs={'class':'form-control'}),
            'id_tipo_cont': forms.Select(attrs={'class':'form_control'}),
            'id_tipo_servicio': forms.Select(attrs={'class':'form_control'}),
            'correo': forms.TextInput(attrs={'class':'form-control'}),
            'mensaje': forms.Textarea(attrs={'class':'form-control'}),
        }

class UserRegisterForm(UserCreationForm):
    email = forms.EmailField()
    password1 = forms.CharField(label='Contraseña', widget=forms.PasswordInput)
    password2 = forms.CharField(label='Confirma contraseña', widget=forms.PasswordInput)

    class Meta:
        model = User
        fields = ['username','email','password1','password2']
        help_text = {k:"" for k in fields}
