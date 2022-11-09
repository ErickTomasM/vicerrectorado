<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Extraordinario
 *
 * @property $docente_id
 * @property $dato_id
 * @property $TipoDocente
 * @property $Convocatoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Dato $dato
 * @property Docente $docente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Extraordinario extends Model
{
    
    static $rules = [
		'docente_id' => 'required',
		'dato_id' => 'required',
		'TipoDocente' => 'required',
		'Convocatoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['docente_id','dato_id','TipoDocente','Convocatoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function dato()
    {
        return $this->hasOne('App\Models\Dato', 'id', 'dato_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function docente()
    {
        return $this->hasOne('App\Models\Docente', 'id', 'docente_id');
    }
    

}
