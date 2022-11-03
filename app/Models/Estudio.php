<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudio
 *
 * @property $id
 * @property $Sigla
 * @property $Materia
 * @property $Horast
 * @property $Horasp
 * @property $created_at
 * @property $updated_at
 *
 * @property Designacion[] $designacions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudio extends Model
{
    
    static $rules = [
		'Sigla' => 'required',
		'Materia' => 'required',
		'Horast' => 'required',
		'Horasp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Sigla','Materia','Horast','Horasp'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function designacions()
    {
        return $this->hasMany('App\Models\Designacion', 'estudio_id', 'id');
    }
    

}
