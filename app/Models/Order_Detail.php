<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_order',
        'nama_menu',
        'harga_menu',
        'jumlah',
    ];

    public function Order()
    {
        return $this->belongsTo(Order::class,'id_order','id');
    }
}
