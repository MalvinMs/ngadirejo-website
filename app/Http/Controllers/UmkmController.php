<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $umkm = Umkm::all();
        return view('umkm', compact('umkm'));
    }
}
