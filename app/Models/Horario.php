<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Horario
 *
 * @property $id
 * @property $docente_id
 * @property $infraestructura_id
 * @property $Dia
 * @property $Turno
 * @property $Hora
 * @property $created_at
 * @property $updated_at
 *
 * @property Designacion[] $designacions
 * @property Docente $docente
 * @property Infraestructura $infraestructura
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Horario extends Model
{
    
    static $rules = [
		'docente_id' => 'required',
		'infraestructura_id' => 'required',
		'Dia' => 'required',
		'Turno' => 'required',
		'Hora' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['docente_id','infraestructura_id','Dia','Turno','Hora'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function designacions()
    {
        return $this->hasMany('App\Models\Designacion', 'horario_id', 'id');
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
    public function infraestructura()
    {
        return $this->hasOne('App\Models\Infraestructura', 'id', 'infraestructura_id');
    }
    

}
