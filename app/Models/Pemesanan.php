<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory, HasUuids;
    protected $table ='pemesanans';
    protected $fillable = ['customer_id', 'pemesanan_id', 'tgl'];

    public function detail()
    {
        return $this->belongsto(detail_pesanan::class, 'pemesanan_id');
    }
    public function customer()
    {
        return $this->belongsto(detail_pesanan::class, 'customer_id');
    }
}
