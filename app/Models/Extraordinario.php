<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Extraordinario
 *
 * @property $id
 * @property $docente_id
 * @property $designacion_id
 * @property $estudio_id
 * @property $estudio1
 * @property $estudio2
 * @property $estudio3
 * @property $estudio4
 * @property $estudio5
 * @property $TiposDocente
 * @property $Dedicacion
 * @property $Convocatoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Designacion $designacion
 * @property Docente $docente
 * @property Estudio $estudio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Extraordinario extends Model
{
    
    static $rules = [
		'docente_id' => 'required',
		'designacion_id' => 'required',
		'estudio_id' => 'required',
		'TiposDocente' => 'required',
		'Dedicacion' => 'required',
		'Convocatoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['docente_id','designacion_id','estudio_id','estudio1','estudio2','estudio3','estudio4','estudio5','TiposDocente','Dedicacion','Convocatoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function designacion()
    {
        return $this->hasOne('App\Models\Designacion', 'id', 'designacion_id');
    }
    
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
    

}
