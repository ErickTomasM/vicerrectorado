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
 * @property $Cargo
 * @property $Direccion
 * @property $Genero
 * @property $Nacionalidad
 * @property $EstadoCivil
 * @property $FechaNacimiento
 * @property $CorreoElectronico
 * @property $Titulo
 * @property $created_at
 * @property $updated_at
 *
 * @property Consultore[] $consultores
 * @property Extraordinario[] $extraordinarios
 * @property Horario[] $horarios
 * @property Titulare[] $titulares
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
		'Cargo' => 'required',
		'Direccion' => 'required',
		'Genero' => 'required',
		'Nacionalidad' => 'required',
		'EstadoCivil' => 'required',
		'FechaNacimiento' => 'required',
		'CorreoElectronico' => 'required',
		'Titulo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombres','ApellidoPaterno','ApellidoMaterno','ci','Telefono','Cargo','Direccion','Genero','Nacionalidad','EstadoCivil','FechaNacimiento','CorreoElectronico','Titulo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultores()
    {
        return $this->hasMany('App\Models\Consultore', 'docente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function extraordinarios()
    {
        return $this->hasMany('App\Models\Extraordinario', 'docente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Models\Horario', 'docente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function titulares()
    {
        return $this->hasMany('App\Models\Titulare', 'docente_id', 'id');
    }
    
    public function prueba() {
        return $this->hasMany('App\Estudios');
    }

}
