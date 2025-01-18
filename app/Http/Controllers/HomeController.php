<?php

namespace App\Http\Controllers;

use App\Models\Pertanian;
use App\Models\Umkm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $umkm = Umkm::all();
        $pertanian = Pertanian::all();
        return view('welcome', compact('umkm', 'pertanian'));
    }
}
