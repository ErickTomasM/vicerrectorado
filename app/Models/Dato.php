<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dato
 *
 * @property $id
 * @property $Tipo
 * @property $Tiempo
 * @property $Dato01
 * @property $Dato02
 * @property $Dato03
 * @property $Dato04
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dato extends Model
{
    
    static $rules = [
		'Tipo' => 'required',
		'Tiempo' => 'required',
		'Dato01' => 'required',
		'Dato02' => 'required',
		'Dato03' => 'required',
		'Dato04' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Tipo','Tiempo','Dato01','Dato02','Dato03','Dato04'];



}
