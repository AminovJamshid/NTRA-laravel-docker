<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ad_id',
    ];
    public  function  ad(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {

        return $this->belongsTo(Ad::class);
    }
}
