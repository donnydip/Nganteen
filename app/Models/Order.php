<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_user',
        'id_warung',
        'catatan',
        'total_harga',
        'metode_bayar',
        'status_pesanan',
    ];

    public function Order_Detail()
    {
        return $this->hasOne(Order_Detail::class);
    }

    public function av_table()
    {
        return $this->hasOne(Avail_table::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }
}
