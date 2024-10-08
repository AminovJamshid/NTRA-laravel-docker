<?php

namespace App\Actions;

use App\Models\Ad;
//dd("ishladi");

class GetAds
{
    public function __invoke(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view("home", ['ads' => Ad::all()]);
    }


}
