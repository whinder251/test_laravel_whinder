<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\http;
class DashboardController extends Controller
{
    public function index()
    {
        $artists = HTTP::get('https://api.happi.dev/v1/music/artists?page=1&apikey=a85f2d8DJV9zjAI8Q4rm9ho37kDDJtoCrWbOt6SzahyGuQeQYLiVNWEU');
        $array = $artists->json();
     return view('dashboard', compact('array'));
    }
}
