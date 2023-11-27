<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TicketTb
 *
 * @property $id
 * @property $persona_id
 * @property $producto_id
 * @property $venta_id
 * @property $created_at
 * @property $updated_at
 *
 * @property PersonasTb $personasTb
 * @property ProductoTb $productoTb
 * @property VentasTb $ventasTb
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TicketTb extends Model
{
    protected $table = 'ticket_tb';
    static $rules = [
		'persona_id' => 'required',
		'producto_id' => 'required',
		'venta_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['persona_id','producto_id','venta_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function personasTb()
    {
        return $this->hasOne('App\Models\PersonasTb', 'id', 'persona_id');
    }
    
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
    public function ventasTb()
    {
        return $this->hasOne('App\Models\VentasTb', 'venta_id', 'venta_id');
    }
    

}
