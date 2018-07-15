@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row" id='film-view'>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row" id='film-set-comment'>
                <input type="text" name='post-comment' id='input-post-comment'>
                <button id="button-post-comment">Comment</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row" id='film-comment'>
            </div>
        </div>
    </div>

    @auth
        {{  setcookie('name', Auth::user()->name , time() + (86400 * 30), "/")    }}
        {{  setcookie('id', Auth::user()->id , time() + (86400 * 30), "/")    }}
    @else
        
    @endauth
</div>

@endsection
@section('javascript')
    <script src="{{ URL::asset('js/film/film_view.js') }}"></script>
@endsection

