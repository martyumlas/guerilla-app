<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Model
{
    use HasFactory, HasApiTokens;

    protected $guarded = [];
    

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function capabilities(): BelongsToMany
    {
        return $this->belongsToMany(Capability::class, 'capability_customer', 'capability_id', 'customer_id');
    }
}
