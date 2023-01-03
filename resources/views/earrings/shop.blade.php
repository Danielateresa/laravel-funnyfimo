@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center pb-5">Welcome to FunnyFimo Shop!</h1>

    <h3>Handmade earrings</h3>
    <p>All earrings are completely handmade from hypoallergenic and durable materials.</p>

    <div class="row">
        @forelse($earrings as $earring)
        <div class="col-3 gy-5">
            <div class="card border-0">
                <img class="shop_img" src="{{$earring->img}}" alt="{{$earring->name}}">
                <div class="card-body">
                    <h4>{{$earring->name}}</h4> <span class="fw-bold fs-3">{{$earring->price}} €</span>

                </div>

                <div class="card_actions d-flex">
                    <a class="btn btn-outline ms-auto me-2 mb-3" href="{{route('earrings.show', $earring->id)}}">Show
                        details</a>
                    <a class="btn buy_now me-3 mb-3" href="#">Buy now!</a>
                </div>
            </div>
        </div>

        @empty
        <h3>Sorry, no earrings available in this section!</h3>
        @endforelse
    </div>

</div>
@endsection