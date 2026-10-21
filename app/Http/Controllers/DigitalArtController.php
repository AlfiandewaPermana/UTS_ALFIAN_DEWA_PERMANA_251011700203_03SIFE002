<?php

namespace App\Http\Controllers;

use App\Models\DigitalArt;
use Illuminate\Http\Request;

class DigitalArtController extends Controller
{
   public function index(Request $request)
    {
        $search = $request->input('search');

        $arts = DigitalArt::when($search, function ($query, $search) {
            return $query->where('title', 'like', "%{$search}%")
                         ->orWhere('artist', 'like', "%{$search}%")
                         ->orWhere('software_used', 'like', "%{$search}%");
        })->get();

        return view('arts.index', compact('arts'));
    }

    public function show($id)
    {
        $art = DigitalArt::findOrFail($id);
        return view('arts.show', compact('art'));
    }
}