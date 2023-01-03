@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="pb-3">Earring detail</h2>

    <img class="detail_img" src="{{$earring->img}}" alt="{{$earring->name}}">

    <div class="detail_text pt-5">
        <h4>Name: <span>{{$earring->name}}</span></h4>
        <h4>Code: <span>{{$earring->code}}</span></h4>
        <h4>Price: <span>{{$earring->price}} €</span></h4>
        <h4>Description: <span>{{$earring->description}}</span></h4>
    </div>

</div>
@endsection