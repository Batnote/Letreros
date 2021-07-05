from django.db import models 
from django.utils import timezone
from django.utils.translation import ugettext as _

 

# Create your models here. 

class tipo_contacto(models.Model): 
    id_tipo_cont = models.IntegerField(primary_key=True,verbose_name='Id de contacto') 
    desc_tipo_cont = models.CharField(max_length=50,verbose_name='Descripcion de contacto') 

    def __str__(self): 

        return self.desc_tipo_cont 

class tipo_servicio(models.Model): 
    id_tipo_servicio = models.IntegerField(primary_key=True,verbose_name='Id de servicio') 
    desc_tipo_servicio = models.CharField(max_length=50,verbose_name='Descripcion de servicio') 

    def __str__(self): 

        return self.desc_tipo_servicio 

 

class Contacto(models.Model): 
    id_contacto = models.AutoField(primary_key=True, verbose_name='Id de contacto') 
    nombre = models.CharField(max_length=50, verbose_name='Nombre') 
    correo = models.CharField(max_length=50,null=True, blank=True, verbose_name='Correo') 
    mensaje = models.CharField(max_length=90,null=True, blank=True, verbose_name='Mensaje') 
    id_tipo_cont = models.ForeignKey(tipo_contacto, on_delete=models.CASCADE) 
    id_tipo_servicio = models.ForeignKey(tipo_servicio, on_delete=models.CASCADE) 

    def __str__(self): 

        return self.nombre 

class Post(models.Model):
    author = models.ForeignKey('auth.User', on_delete=models.CASCADE)
    title = models.CharField(max_length=200)
    text = models.TextField()
    created_date = models.DateTimeField(
            default=timezone.now)
    published_date = models.DateTimeField(
            blank=True, null=True)
    
    def publish(self):
        self.published_date = timezone.now()
        self.save()
    
    def __str__(self):
        return self.title
        
    class Meta:
        permissions = (
            ('admin',_('Es admin')),
            ('cliente',_('Es cliente')),
        )