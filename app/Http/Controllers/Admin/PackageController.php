<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    // index, create, store, edit, update, delete,

    public function index()
    {
        $packages = Package::all();

        return view('pages.admin.package.index', ['packages' => $packages]);
    }
}
