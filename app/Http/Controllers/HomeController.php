<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class HomeController extends Controller
{
  public function index()
  {
    $comics = Comic::paginate(4);
    return view('home', compact('comics'));
  }
}
