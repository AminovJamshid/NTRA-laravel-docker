<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class Bookmarked extends Controller
{
    #[NoReturn] public  function save(Request $request)
    {
        $ad_id = $request->input("ad_id");
        $user_id = $request->input("user_id");

        $save= \App\Models\Bookmarked::create(['ad_id' => $ad_id, 'user_id' => $user_id]);

        return redirect("/");
    }

    public  function  delete(Request $request)
    {
        $ad_id = $request->input("ad_id");
        $user_id = $request->input("user_id");
        $delete = \App\Models\Bookmarked::where('ad_id', $ad_id)
            ->where('user_id', $user_id)
            ->delete();

        return redirect("/");
    }
}
