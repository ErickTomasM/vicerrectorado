<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consultore
 *
 * @property $id
 * @property $docente_id
 * @property $designacion_id
 * @property $estudio_id
 * @property $materiaC01
 * @property $materiaC02
 * @property $materiaC03
 * @property $materiaC04
 * @property $materiaC05
 * @property $Dedicacion
 * @property $contrato
 *
 * @property Designacion $designacion
 * @property Docente $docente
 * @property Estudio $estudio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consultore extends Model
{
    
    static $rules = [
		'docente_id' => 'required',
		'designacion_id' => 'required',
		'estudio_id' => 'required',
		'Dedicacion' => 'required',
		'contrato' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['docente_id','designacion_id','estudio_id','materiaC01','materiaC02','materiaC03','materiaC04','materiaC05','Dedicacion','contrato'];


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
