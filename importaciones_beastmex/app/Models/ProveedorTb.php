<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProveedorTb
 *
 * @property $id
 * @property $persona_id
 * @property $nombre_empresa
 * @property $created_at
 * @property $updated_at
 *
 * @property ComprasTb[] $comprasTbs
 * @property PersonasTb $personasTb
 * @property ProductoTb[] $productoTbs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ProveedorTb extends Model
{
    protected $table = 'proveedor_tb';
    static $rules = [
		'persona_id' => 'required',
		'nombre_empresa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['persona_id','nombre_empresa'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comprasTbs()
    {
        return $this->hasMany('App\Models\ComprasTb', 'proveedor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function personasTb()
    {
        return $this->hasOne('App\Models\PersonasTb', 'id', 'persona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productoTbs()
    {
        return $this->hasMany('App\Models\ProductoTb', 'proveedor_id', 'id');
    }
    

}
