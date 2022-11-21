<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Titulare
 *
 * @property $id
 * @property $docente_id
 * @property $designacion_id
 * @property $estudio_id
 * @property $materia01
 * @property $materia02
 * @property $materia03
 * @property $materia04
 * @property $materia05
 * @property $TiposDocente
 * @property $Dedicacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Designacion $designacion
 * @property Docente $docente
 * @property Estudio $estudio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Titulare extends Model
{
    
    static $rules = [
		'docente_id' => 'required',
		'designacion_id' => 'required',
		'estudio_id' => 'required',
		'TiposDocente' => 'required',
		'Dedicacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['docente_id','designacion_id','estudio_id','materia01','materia02','materia03','materia04','materia05','TiposDocente','Dedicacion'];


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
