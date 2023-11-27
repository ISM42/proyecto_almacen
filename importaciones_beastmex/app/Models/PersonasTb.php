<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonasTb
 *
 * @property $id
 * @property $user_id
 * @property $nombre
 * @property $apellido_p
 * @property $apellido_m
 * @property $correo
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property ProveedorTb[] $proveedorTbs
 * @property TicketTb[] $ticketTbs
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PersonasTb extends Model
{
    protected $table = 'personas_tb';
    static $rules = [
		'user_id' => 'required',
		'nombre' => 'required',
		'apellido_p' => 'required',
		'apellido_m' => 'required',
		'correo' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','nombre','apellido_p','apellido_m','correo','telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proveedorTbs()
    {
        return $this->hasMany('App\Models\ProveedorTb', 'persona_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ticketTbs()
    {
        return $this->hasMany('App\Models\TicketTb', 'persona_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
