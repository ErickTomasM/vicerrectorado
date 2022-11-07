<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Titulare
 *
 * @property $id
 * @property $docente_id
 * @property $TipoDocente
 * @property $Convocatori
 * @property $created_at
 * @property $updated_at
 *
 * @property Docente $docente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Titulare extends Model
{
    
    static $rules = [
		'docente_id' => 'required',
		'TipoDocente' => 'required',
		'Convocatori' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['docente_id','TipoDocente','Convocatori'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function docente()
    {
        return $this->hasOne('App\Models\Docente', 'id', 'docente_id');
    }
    

}
