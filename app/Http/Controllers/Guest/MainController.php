<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Train;

class MainController extends Controller
{
    public function index() {
        $trains = Train::all();

        return view('home', compact('trains'));
    }
}
