<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class FilmsController extends Controller
{
    public function index()
    {
    	$films = App\Film::all();
    	return response()->json($films, 200);
    }
    public function one($id)
    {
    	$film = App\Film::find($id);
    	return response()->json($film, 200);
    }
}
