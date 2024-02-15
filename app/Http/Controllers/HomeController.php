<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $packages = Package::all();

        return view('pages.home.index', ['packages' => $packages]);
    }

    public function detail($slug)
    {
        $package = Package::where('slug', $slug)->first();

        return view('pages.home.detail', ['package' => $package]);
    }
}
