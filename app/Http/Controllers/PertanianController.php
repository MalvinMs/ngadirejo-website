<?php

namespace App\Http\Controllers;

use App\Models\Pertanian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanianController extends Controller
{
    public function index()
    {
        $data = Pertanian::all();

        // Kirim data ke view
        return view('pertanian', compact('data'));
    }
}
