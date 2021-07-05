from django.contrib.auth.models import User
from django.contrib import messages
from django.shortcuts import render, redirect
from .models import *
from .forms import *

def post_list(request):
    user = request.user
    if user.has_perm('letreros.admin'):
        posts = Post.objects.filter(
            published_date__lte=timezone.now()).order_by('published_date')
        return render(request, 'letreros/post_list.html', {'posts':posts})
    else:
        return render(request, 'letreros.bienvenido.html')

def contactolist(request):
    contacto = Contacto.objects.all 
    datos = {
        'contacto': contacto
    }
    return render(request,'letreros/contactoslist.html',datos)

def inicio(request):
    return render(request, 'letreros/index.html')

def form_contactos(request):
    datos = {
    'form' : Contactoform()
    }

    if(request.method == 'POST'):
        formulario = Contactoform(request.POST)
        if formulario.is_valid():
            formulario.save()
            datos['mensaje'] = 'Guardados correctamente'
    return render (request,'letreros/form_contactos.html',datos)

def form_mod_contactos(request, id):
    contacto = Contacto.objects.get(id_contacto=id)
    
    datos = {
        'form':Contactoform(instance=contacto)
    }

    if(request.method == 'POST'):
        formulario = Contactoform(data=request.POST, instance=contacto)
        if formulario.is_valid():
            formulario.save()
            datos['mensaje'] = 'Modificados correctamente'

    return render(request,'letreros/form_mod_contactos.html',datos)

def form_del_contactos(request, id):
    contacto = Contacto.objects.get(id_contacto=id)
    contacto.delete()

    return redirect(to='contactoslist')

def historia(request):
    return render(request,'letreros/historia.html')

def inicio_sesion(request):
    return render(request, 'letreros/inicio_sesion.html')


def infraestructura(request):
    return render(request,'letreros/infraestructura.html')

def portafolio(request):
    return render(request,'letreros/portafolio.html')

def caja_luz(request):
    return render(request, 'letreros/caja_luz.html')

def letreros_corp(request):
    return render(request, 'letreros/letreros_corp.html')

def totems(request):
    return render(request, 'letreros/totems.html')

def señaleticas(request):
    return render(request, 'letreros/señaleticas.html') 

def contacto(request):
    return render(request, 'letreros/contacto.html')

def consumirapi(request):
    return render(request, 'letreros/consumirapi.html')

def bienvenida(request):
    return render(request, 'letreros/bienvenida.html')

def register(request):
    if request.method == 'POST':
        form = UserCreationForm(request.POST)
        if form.is_valid():
            username = form.cleaned_data['username']
            messages.success(request, f'Usuario {username} ha sido creado')
            return redirect('inicio')
    else:
        form = UserRegisterForm()

    context = {'form' : form}
    return render(request, 'letreros/register.html', context)