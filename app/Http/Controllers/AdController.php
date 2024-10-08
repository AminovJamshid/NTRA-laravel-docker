<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\AdImage;
use App\Models\Branch;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Storage;
use JetBrains\PhpStorm\NoReturn;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $ads = Ad::all();
        $branches = Branch::all();
        return view('ads.index', ['ads' => $ads, 'branches' => $branches]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('ads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    #[NoReturn] public function store(Request $request): \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\Foundation\Application
    {

        $request->validate([
            'title' => 'required | min:5',
            'description' => 'required',
            'image' => 'mimes:jpg,jpeg,png,gif,svg|max:2048',
        ], [
            'title' => ['required' => 'Titlini kiritish majburiy'],
            'description' => ['required' => 'Izoh kiritish majburiy'],
        ]);
        $gender = $request->input("gender");

        $ad = Ad::query()->create([
            'title' => $request->input("title"),
            'description' => $request->input("description"),
            'user_id' => auth()->id(),
            'status_id' => Status::ACTIVE,
            'address' => $request->input("address"),
            'branch_id' => $request->input("branch_id"),
            'price' => $request->input("price"),
            'rooms' => $request->input("rooms"),
            'gender' => $gender,


        ]);

        if ($request->hasFile('image')) {
            $file = Storage::disk('public')->put('/', $request->image);

            AdImage::query()->create([
                'ad_id' => $ad->id,
                'name' => $file,
            ]);
        }

        return redirect(route('home'))->with('message', "E'lon yaratildi");

    }
    public function find(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $searchPhrase = $request->input('search_phrase');
        $branchId = $request->input('branches_id');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        $ads = Ad::query();
        if ($searchPhrase) {
            $ads->where('title', 'like', '%' . $searchPhrase . '%');
        }
        if ($branchId) {
            $ads->where('branches_id', $branchId);
        }
        if ($minPrice) {
            $ads->where('price', '>=', $minPrice);
        }
        if ($maxPrice) {
            $ads->where('price', '<=', $maxPrice);
        }
        $ads = $ads->with('branch')->get();
        $branches = Branch::all();
        return view('ads.index', compact('ads', 'branches'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $ad = Ad::query()->find($id);
        return view('ads.show', ['ad' => $ad]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
