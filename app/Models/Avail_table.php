<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avail_table extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_order',
        'nomor_meja',
        'status',
    ];

    public function Order()
    {
        return $this->belongsTo(Order::class,'id_order','id');
    }
}
