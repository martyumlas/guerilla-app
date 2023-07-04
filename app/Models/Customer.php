<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function capabilities()
    {
        return $this->belongsToMany(Capability::class);
    }
}
