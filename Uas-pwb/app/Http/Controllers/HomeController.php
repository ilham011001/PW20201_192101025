<?php

namespace App\Http\Controllers;

use App\Models\Lks;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('app');
    }

    public function stock()
    {
        $lkses = Lks::all();
        return view('stock', compact('lkses'));
    }
}
