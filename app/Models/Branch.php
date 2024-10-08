<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    public  function  ads(): \Illuminate\Database\Eloquent\Relations\HasMany
    {

        return $this->hasMany(Ad::class);

    }
}
