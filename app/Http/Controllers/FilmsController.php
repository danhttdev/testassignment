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
    	$film['comments'] = $film->comments;
    	return response()->json($film, 200);
    }
    public function getBySlug($slug)
    {
    	$film = App\Film::where('slug',$slug)->first();
    	$film->comments = $film->comments;
    	return response()->json($film, 200);
    }
}
