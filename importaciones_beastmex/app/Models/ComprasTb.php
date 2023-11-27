<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComprasTb
 *
 * @property $id
 * @property $proveedor_id
 * @property $producto_id
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property ProductoTb $productoTb
 * @property ProveedorTb $proveedorTb
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ComprasTb extends Model
{
    protected $table = 'compras_tb';
    static $rules = [
		'proveedor_id' => 'required',
		'producto_id' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['proveedor_id','producto_id','cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productoTb()
    {
        return $this->hasOne('App\Models\ProductoTb', 'id', 'producto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedorTb()
    {
        return $this->hasOne('App\Models\ProveedorTb', 'id', 'proveedor_id');
    }
    

}
