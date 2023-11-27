<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductoTb
 *
 * @property $id
 * @property $proveedor_id
 * @property $nombre_producto
 * @property $num_serie
 * @property $marca
 * @property $cantidad
 * @property $costo_compra
 * @property $fecha_ingreso
 * @property $created_at
 * @property $updated_at
 *
 * @property ComprasTb[] $comprasTbs
 * @property ProveedorTb $proveedorTb
 * @property TicketTb[] $ticketTbs
 * @property VentasTb[] $ventasTbs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ProductoTb extends Model
{
    protected $table = 'producto_tb';
    static $rules = [
		'proveedor_id' => 'required',
		'nombre_producto' => 'required',
		'num_serie' => 'required',
		'marca' => 'required',
		'cantidad' => 'required',
		'costo_compra' => 'required',
		'fecha_ingreso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['proveedor_id','nombre_producto','num_serie','marca','cantidad','costo_compra','fecha_ingreso'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comprasTbs()
    {
        return $this->hasMany('App\Models\ComprasTb', 'producto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedorTb()
    {
        return $this->hasOne('App\Models\ProveedorTb', 'id', 'proveedor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ticketTbs()
    {
        return $this->hasMany('App\Models\TicketTb', 'producto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventasTbs()
    {
        return $this->hasMany('App\Models\VentasTb', 'producto_id', 'id');
    }
    

}
