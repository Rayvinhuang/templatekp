<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisMenu extends Model
{
    use HasFactory, HasUuids;
    protected $table ='jenis_menus';
    protected $fillable = ['namaJenis'];

    public function makanans()
    {
        return $this->hasMany(JenisMenu::class, 'jenis_id');
    }
}
