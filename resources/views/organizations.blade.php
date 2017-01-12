@extends('layouts.app')

@section('content')
<div class="container"> {{App::getLocale()}}
    {{app()->getLocale()}}
    <div class="row">
        <div class="col-md-12 ">
		@foreach ($organizations as $organization)
				<a href={{ asset("/organization/".$organization->id)}}>{{$organization->id}}) {{$organization->title}} <img src={{ asset($organization->logo)}}/></a><br/>
        @endforeach
        </div>
    </div>
</div>
@endsection