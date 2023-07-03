<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Garantia
 *
 * @property $id
 * @property $codigo
 * @property $producto_servicio
 * @property $vehiculo
 * @property $telefono
 * @property $fecha_vencimiento
 * @property $estado_garantia
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Garantia extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'producto_servicio' => 'required',
		'vehiculo' => 'required',
		'telefono' => 'required',
		'fecha_vencimiento' => 'required',
		'estado_garantia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','producto_servicio','vehiculo','telefono','fecha_vencimiento','estado_garantia'];



}
