@extends('layouts.app')

@section('title')
Show earring
@endsection

@section('content')
<div class="container py-5">
    <h2 class="pb-3">Ring detail - <span class="text_pink">{{$earring->name}}</span></h2>

    <img class=" detail_img" src="{{$earring->img}}" alt="{{$earring->name}}">

    <div class="detail_text pt-5">
        <h4>Name: <span>{{$earring->name}}</span></h4>
        <h4>Code: <span>{{$earring->code}}</span></h4>
        <h4>Code: <span>{{$earring->size}}</span></h4>
        <h4>Price: <span class="text_pink fw-bold fs-3">{{$earring->price}} €</span></h4>
        <h4>Description: <span>{{$earring->description}}</span></h4>
    </div>
    <!-- detail_text -->

    <div class="card_actions d-flex">
        <a class="btn buy_now me-3 my-4 fw-bold" href="#">Buy now!</a>
        <a class="ms-auto me-5 mt-4 back " href="{{route('earringsShop')}}">
            <- Back</a>
    </div>
    <!-- card_actions -->
</div>
@endsection