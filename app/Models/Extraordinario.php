<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Extraordinario
 *
 * @property $id
 * @property $docente_id
 * @property $TiposDocente
 * @property $Convocatoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Docente $docente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Extraordinario extends Model
{
    
    static $rules = [
		'docente_id' => 'required',
		'TiposDocente' => 'required',
		'Convocatoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['docente_id','TiposDocente','Convocatoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function docente()
    {
        return $this->hasOne('App\Models\Docente', 'id', 'docente_id');
    }
    

}
