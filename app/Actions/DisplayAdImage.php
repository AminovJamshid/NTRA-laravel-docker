<?php

namespace App\Actions;

use App\Models\Ad;

class DisplayAdImage
{
    public  function  __invoke(Ad|null  $ad = null):string
    {
        $image = $ad?->images()->first()?->name;
        if ($image) {
            return "/storage/" . $image;
        }

        return "/storage/default.jpg";
    }

}
