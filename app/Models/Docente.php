<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docente
 *
 * @property $id
 * @property $Nombres
 * @property $ApellidoPaterno
 * @property $ApellidoMaterno
 * @property $ci
 * @property $Telefono
 * @property $Titulo
 * @property $created_at
 * @property $updated_at
 *
 * @property Designacion[] $designacions
 * @property Horario[] $horarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docente extends Model
{
    
    static $rules = [
		'Nombres' => 'required',
		'ApellidoPaterno' => 'required',
		'ApellidoMaterno' => 'required',
		'ci' => 'required',
		'Telefono' => 'required',
		'Titulo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombres','ApellidoPaterno','ApellidoMaterno','ci','Telefono','Titulo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function designacions()
    {
        return $this->hasMany('App\Models\Designacion', 'docente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Models\Horario', 'docente_id', 'id');
    }
    

}
