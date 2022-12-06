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
 * @property $created_at
 * @property $updated_at
 *
 * @property Consultore[] $consultores
 * @property Extraordinario[] $extraordinarios
 * @property Reasignacion[] $reasignacions
 * @property Titulare[] $titulares
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Designacion extends Model
{
    
    static $rules = [
		'FechaDesignacion' => 'required',
		'Dictamen' => 'required',
		'NumeroCarta' => 'required',
		'Facultad' => 'required',
		'Carrera' => 'required',
		'Gestion' => 'required',
		'Semestre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['FechaDesignacion','Resolucion','Dictamen','NumeroCarta','Facultad','Carrera','Gestion','Semestre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultores()
    {
        return $this->hasMany('App\Models\Consultore', 'designacion_id', 'id');
    }
    
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
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function titulares()
    {
        return $this->hasMany('App\Models\Titulare', 'designacion_id', 'id');
    }
    

}
