<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Designacion
 *
 * @property $id
 * @property $FechaDesignacion
 * @property $Resolucion
 * @property $Dictamen
 * @property $NumeroCarta
 * @property $Facultad
 * @property $Carrera
 * @property $Gestion
 * @property $Semestre
 * @property $Convocatoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Extraordinario[] $extraordinarios
 * @property Reasignacion[] $reasignacions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Designacion extends Model
{
    
    static $rules = [
		'FechaDesignacion' => 'required',
		'Resolucion' => 'required',
		'Dictamen' => 'required',
		'NumeroCarta' => 'required',
		'Facultad' => 'required',
		'Carrera' => 'required',
		'Gestion' => 'required',
		'Semestre' => 'required',
		'Convocatoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['FechaDesignacion','Resolucion','Dictamen','NumeroCarta','Facultad','Carrera','Gestion','Semestre','Convocatoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function extraordinarios()
    {
        return $this->hasMany('App\Models\Extraordinario', 'designacion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reasignacions()
    {
        return $this->hasMany('App\Models\Reasignacion', 'designacion_id', 'id');
    }
    

}
