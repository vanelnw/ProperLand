<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class HomeController extends Controller
{
    public function index() {
        $properies = Property::orderBy('created_at', 'desc')->limit(4)->get();
        return view('home', ['properties' => $properies]);
    }
}
