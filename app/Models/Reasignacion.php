<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reasignacion
 *
 * @property $id
 * @property $designacion_id
 * @property $FechaReasignacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Designacion $designacion
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reasignacion extends Model
{
    
    static $rules = [
		'designacion_id' => 'required',
		'FechaReasignacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['designacion_id','FechaReasignacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function designacion()
    {
        return $this->hasOne('App\Models\Designacion', 'id', 'designacion_id');
    }
    

}
