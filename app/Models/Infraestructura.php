<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Infraestructura
 *
 * @property $id
 * @property $Ambiente
 * @property $Piso
 * @property $Descripcion
 * @property $Capacidad
 * @property $Equipamiento
 * @property $Ubicacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Horario[] $horarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Infraestructura extends Model
{
    
    static $rules = [
		'Ambiente' => 'required',
		'Piso' => 'required',
		'Descripcion' => 'required',
		'Capacidad' => 'required',
		'Equipamiento' => 'required',
		'Ubicacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Ambiente','Piso','Descripcion','Capacidad','Equipamiento','Ubicacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Models\Horario', 'infraestructura_id', 'id');
    }
    

}
