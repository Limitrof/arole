@extends('layouts.app')

@section('content')
    ---{{Session::get('locale')}}---
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Languages
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            @foreach(config('app.languages') as $lang)
                <li class="{{ session('locale') == $lang ? 'active' : '' }}">
                    <a href="/language/{{ $lang }}" >{{ $lang }}</a>
                </li>
            @endforeach
        </ul>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            {{App::getLocale()}}
            {{app()->getLocale()}}
            ------------
            {{$oo}}
        </div>
    </div>
</div>
@endsection