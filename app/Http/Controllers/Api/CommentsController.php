<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
// use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class CommentsController extends Controller
{
  
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_id' => 'required',
            'comment' => 'required',
            'film_id' => 'required',
        ]);
    }

    public function postCreate(Request $request)
    {   
        if( !Auth::check())
        {    
            // setcookie('id', Auth::user()->id , time() + (86400 * 30), "/");
            // setcookie('name', Auth::user()->name , time() + (86400 * 30), "/");    
            $validator = $this->validator($request->all());
            if ($validator->fails()) {
                return response()->json(
                    [
                        'status' => 'Create error !!!',
                        'msg' => $validator->messages()
                    ]);
            } else {
                App\Comment::create([
                    'user_id' => $request->input('user_id'),
                    'film_id' => $request->input('film_id'),
                    'comment' => $request->input('comment')
                ]);
                return response()->json(
                    [
                        'status' => 'Create success !!!',
                        'data' => $request
                    ]);
            }
        }else return response()->json([
            'message' => 'Not logged in',
        ], 404);
    }
}
