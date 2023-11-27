<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VentasTb
 *
 * @property $venta_id
 * @property $producto_id
 * @property $cantidad
 * @property $precio_venta
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @property ProductoTb $productoTb
 * @property TicketTb[] $ticketTbs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class VentasTb extends Model
{
    protected $table = 'ventas_tb';
    static $rules = [
		'venta_id' => 'required',
		'producto_id' => 'required',
		'cantidad' => 'required',
		'precio_venta' => 'required',
		'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['venta_id','producto_id','cantidad','precio_venta','fecha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productoTb()
    {
        return $this->hasOne('App\Models\ProductoTb', 'id', 'producto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ticketTbs()
    {
        return $this->hasMany('App\Models\TicketTb', 'venta_id', 'venta_id');
    }
    

}
