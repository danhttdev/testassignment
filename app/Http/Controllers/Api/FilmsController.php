<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use Auth;
use Illuminate\Support\Facades\Validator;

class FilmsController extends Controller
{
    public function index(Request $request)
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
    	if(!isset($film)) 
		return response()->json([
            'message' => '404 File not found',
        ], 404);
        $film->comments = $film->comments;
        $itemComment = new \stdClass();
        $comments = array();
        if(count($film->comments))
        {
            foreach($film->comments as $comment)
            {
                $itemComment = $comment;
                $itemComment->name = $comment->user->name;
                array_push($comments,$itemComment);
            }
        }
        return response()->json($film, 200);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|unique:films|min:5',
            'description' => 'required|min:10',
            'realease_date' => 'required|date',
            'rating' => 'required|numeric|min:1|max:5',
            'ticket_price' => 'required|numeric|min:1|max:10000',
            'country' => 'required',
            'genre' => 'required',
        ]);
    }

    public function postCreate(Request $request)
    {   
        if( !Auth::check())
        {    
            $validator = $this->validator($request->all());
    
            if ($validator->fails()) {
                return response()->json(
                    [
                        'status' => 'Create error !!!',
                        'msg' => $validator->messages()
                    ]);
            } else {
                $file = $request->photo;
                $file->move('upload/img', $file->getClientOriginalName());
                App\Film::create([
                    'name' => $request->input('name'),
                    'description' => $request->input('description'),
                    'realease_date' => $request->input('realease_date'),
                    'rating' => $request->input('rating'),
                    'ticket_price' => $request->input('ticket_price'),
                    'country' => $request->input('country'),
                    'genre'	=> $request->input('genre'),
                    'photo' => $file->getClientOriginalName(),
                    'slug' => str_slug($request->input('name'))
                ]);
                return response()->json($request, 200);
            }

        }else return response()->json([
            'message' => 'Not logged in',
        ], 404);
    }
}
