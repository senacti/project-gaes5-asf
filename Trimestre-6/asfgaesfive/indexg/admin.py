from django.contrib import admin
from .models import Garantia, EstadosGarantia

# Register your models here.
@admin.register (Garantia)
class GarantiaAdmin(admin.ModelAdmin):
    list_display= ('id_garantia', 'fecha_vencimiento','detalles_garantia','detalles_vehiculo','codigo_garantia', 'estados')
    list_display_links=('id_garantia',)
    list_editable=('estados','fecha_vencimiento','detalles_garantia')
    search_fields=('codigo_garantia','detalles_vehiculo','detalles_garantia',)
    list_filter=('estados','fecha_vencimiento',)
    list_per_page = 10
    
    
@admin.register (EstadosGarantia)
class EstadosAdmin(admin.ModelAdmin):
    list_display= ('id_estado', 'estados',)
    


