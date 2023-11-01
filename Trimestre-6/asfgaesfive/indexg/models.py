from django.db import models
from django.db.models.fields import CharField

class Garantia(models.Model):
    id_garantia = models.AutoField(primary_key=True)
    fecha_vencimiento = models.PositiveIntegerField(max_length=10)
    codigo_garantia = models.PositiveIntegerField(max_length=6)
    detalles_garantia = models.CharField(max_length=100)
    detalles_vehiculo = models.CharField(max_length=80)

class EstadosGarantia(models.Model):
    id_estado = models.AutoField(primary_key=True)
    estado_finalizado = models.CharField(max_length=15)
    estado_creado = models.CharField(max_length=15)
    id_garantia = models.ForeignKey(Garantia, on_delete=models.CASCADE)

