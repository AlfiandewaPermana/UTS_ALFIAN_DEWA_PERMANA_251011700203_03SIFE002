<?php

namespace App\Http\Controllers;

use App\Models\DigitalArt;
use Illuminate\Http\Request;

class DigitalArtController extends Controller
{
    public function index()
    {
        $arts = DigitalArt::all();
        return view('arts.index', compact('arts'));
    }

    public function show($id)
    {
        $art = DigitalArt::findOrFail($id);
        return view('arts.show', compact('art'));
    }
}