<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use Auth;


class FilmsController extends Controller
{
    public function index(Request $request)
    {
        $films = App\Film::all();
        return view('film.index', ['films' => $films]);
    	
    }

    public function one($id)
    {
    	$film = App\Film::find($id);
    	$film['comments'] = $film->comments;
    	return response()->json($film, 200);
    }

    public function getBySlug($slug)
    {
        return view('film.view');
    }

    public function getCreate()
    {
        return view('film.create');
    }
    
    public function postCreate(Request $request)
    {   
        if( Auth::check())
        {
            return response()->json($request, 200);

        }else echo 'NOT LOGGED NONE API';
    }
}
