@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="film-index">
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')
    <script src="{{ URL::asset('js/film/film_index.js') }}"></script>
@endsection