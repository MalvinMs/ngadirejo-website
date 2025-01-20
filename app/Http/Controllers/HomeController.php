<?php

namespace App\Http\Controllers;

use App\Models\Pertanian;
use App\Models\Umkm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $umkm = Umkm::where('jenis', 'UMKM')->get();
        $pertanianUmkm = Umkm::where('jenis', 'Pertanian')->get();
        $pertanian = Pertanian::all();
        return view('welcome', compact('umkm', 'pertanian', 'pertanianUmkm'));
    }
}
