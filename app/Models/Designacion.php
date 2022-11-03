<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Designacion
 *
 * @property $id
 * @property $horario_id
 * @property $docente_id
 * @property $estudio_id
 * @property $Resolucion
 * @property $Dictamen
 * @property $NumeroCarta
 * @property $Facultad
 * @property $Carrera
 * @property $TipoDocente
 * @property $Gestion
 * @property $Semestre
 * @property $Convocatoria
 * @property $FechaDesignacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Docente $docente
 * @property Estudio $estudio
 * @property Horario $horario
 * @property Reasignacion[] $reasignacions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Designacion extends Model
{
    
    static $rules = [
		'horario_id' => 'required',
		'docente_id' => 'required',
		'estudio_id' => 'required',
		'Resolucion' => 'required',
		'Dictamen' => 'required',
		'NumeroCarta' => 'required',
		'Facultad' => 'required',
		'Carrera' => 'required',
		'TipoDocente' => 'required',
		'Gestion' => 'required',
		'Semestre' => 'required',
		'Convocatoria' => 'required',
		'FechaDesignacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['horario_id','docente_id','estudio_id','Resolucion','Dictamen','NumeroCarta','Facultad','Carrera','TipoDocente','Gestion','Semestre','Convocatoria','FechaDesignacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function docente()
    {
        return $this->hasOne('App\Models\Docente', 'id', 'docente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudio()
    {
        return $this->hasOne('App\Models\Estudio', 'id', 'estudio_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function horario()
    {
        return $this->hasOne('App\Models\Horario', 'id', 'horario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reasignacions()
    {
        return $this->hasMany('App\Models\Reasignacion', 'designacion_id', 'id');
    }
    

}
