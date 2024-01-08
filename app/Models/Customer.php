<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory, HasUuids;
    protected $table ='customers';
    protected $fillable = ['namaCustomer', 'alamat', 'membership_id'];

    public function membership()
    {
        return $this->belongsto(Membership::class, 'membership_id');
    }


}
