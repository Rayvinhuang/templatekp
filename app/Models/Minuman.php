<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    use HasFactory, HasUuids;
    protected $table ='minumen';
    protected $fillable = ['namaMinuman', 'harga', 'jenis_id'];

    public function jenisMenu()
    {
        return $this->belongsToMany(JenisMenu::class, 'jenis_id');
    }
}
