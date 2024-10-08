<?php

namespace App\View\Components;

use AllowDynamicProperties;
use App\Enums\Gender;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

#[AllowDynamicProperties] class AdForm extends Component
{
    public $ad;
    public array|null $ads =null;
    public  array|null  $status = null;
    public  $action = "/ads";
    public   $branches = [];

    public $genders;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->branches = \App\Models\Branch::all();
        $this->genders = Gender::cases();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ad-form');
    }
}
