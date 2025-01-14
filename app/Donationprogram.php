<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donationprogram extends Model
{
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function mustahiqs()
    {
        return $this->belongsTo(Mustahiq::class);
    }
}
