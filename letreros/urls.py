from django.urls import path
from django.urls.conf import include
from .views import *
from django.contrib.auth.views import LoginView, LogoutView

urlpatterns = [
  path('',inicio,name="inicio"),
  path('',       include('social.apps.django_app.urls', namespace='social')),
  path('historia/',historia,name="historia"),
  path('infraestructura/',infraestructura,name="infraestructura"),
  path('portafolio/',portafolio,name="portafolio"),
  path('caja_luz/',caja_luz,name="caja_luz"),
  path('letreros_corp/',letreros_corp,name="letreros_corp"),
  path('totems/',totems,name="totems"),
  path('señaleticas/',señaleticas,name="señaleticas"),
  path('contacto/',contacto,name="contacto"),
  path('contactoslist/',contactolist,name="contactoslist"),
  path('form_contactos/',form_contactos,name='form_contactos'),
  path('form_mod_contactos/<id>',form_mod_contactos,name='form_mod_contactos'),
  path('form_del_contactos/<id>',form_del_contactos,name='form_del_contactos'),
  path('consumirapi/',consumirapi,name='consumirapi'),
  path('inicio_sesion/',inicio_sesion,name='inicio_sesion'),
  path('bienvenida/', bienvenida, name="bienvenida"),
  path('register/', register, name="register"),
  path('login/', LoginView.as_view(template_name='letreros/login.html'),name="login"),
  path('logout/', LogoutView.as_view(template_name='letreros/LogoutView.html'),name="LogoutView"),
]