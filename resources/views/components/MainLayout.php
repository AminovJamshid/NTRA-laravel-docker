<?php

namespace App\View\Components;




use Illuminate\View\Component;

class MainLayout extends  Component
{

    public function render(): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Htmlable|\Closure|string
    {
        return view('layouts.main');
    }

}
