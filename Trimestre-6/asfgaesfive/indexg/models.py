from django.db import models

class EstadosGarantia(models.Model):
    id_estado = models.AutoField(primary_key=True)
    estados = models.CharField(max_length=20)

    def __str__(self):
        return self.estados

    class Meta:
        verbose_name = "warrantyState"
        verbose_name_plural = "estadosGarantia"
        db_table = "EstadosGarantia"
        ordering = ['id_estado']

class Garantia(models.Model):
    id_garantia = models.AutoField(primary_key=True)
    fecha_vencimiento = models.PositiveIntegerField()
    codigo_garantia = models.PositiveIntegerField()
    detalles_garantia = models.CharField(max_length=100)
    detalles_vehiculo = models.CharField(max_length=80)
    estados = models.ForeignKey(EstadosGarantia, on_delete=models.CASCADE)

    def __str__(self):
        return str(self.id_garantia)

    class Meta:
        verbose_name = "Warranty"
        verbose_name_plural = "garantia"
        db_table = "Garantia"
        ordering = ['id_garantia']


