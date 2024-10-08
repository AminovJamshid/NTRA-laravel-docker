<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Bookmarked extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ad_id',
    ];

    public function findByAdAndUser($ad_id, $user_id)
    {
        $bookmark = $this->where('ad_id', $ad_id)->where('user_id', $user_id)->first();

        if (!$bookmark) {
            throw new ModelNotFoundException("Bookmark not found for ad_id: {$ad_id} and user_id: {$user_id}");
        }

        return $bookmark;
    }
    public  function  ads()
    {
        return $this->belongsTo( Ad::class, 'ad_id', 'id' );

    }
}
