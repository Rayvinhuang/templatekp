<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory, HasUuids;
    protected $table ='makanans';
    protected $fillable = ['namaMakanan', 'harga', 'jenis_id'];

    public function jenisMenu()
    {
        return $this->belongsTo(JenisMenu::class, 'jenis_id');
    }
}
