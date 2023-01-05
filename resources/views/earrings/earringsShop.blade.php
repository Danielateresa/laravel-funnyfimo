@extends('layouts.app')

@section('title')
Earrings Shop
@endsection

@section('content')
<div class="container py-5">
    <h1 class="text-center pb-3 mt-2">Welcome to FunnyFimo Shop!</h1>
    <h2 class="text-center text_pink mb-5">All the sweetest earrings to wear</h2>

</div>

<div class="earrings_jumbotron">
    <div class="row h-100 m-0">
        <div class="info_text col-4 h-100   d-flex flex-column justify-content-center ps-5">
            <span class="display-3 pb-3">ChocoPraline earring</span>
            <p class="pt-5 pb-1 fs-3">Limited edition</p>
            <p class="fs-2">Handmade with Love</p>
            <p class="lead pt-5">
                <a class="btn btn-light text_pink btn-lg" href="Jumbo action link" role="button">Show more</a>
            </p>
        </div>
    </div>
</div>
<!-- earrings_jumbotron -->

<div class="container py-5">

    <h3>Handmade earrings</h3>
    <p>All earrings are completely handmade from hypoallergenic and durable materials.</p>

    <div class="row pb-2 mb-5">
        @forelse($earrings as $earring)
        <div class="col-3 gy-5">
            <div class="card border-0 h-100">
                <img class="shop_img" src="{{$earring->img}}" alt="{{$earring->name}}">
                <!-- card -->

                <div class="card-body h-100 d-flex flex-column justify-content-end">
                    <h4>{{$earring->name}}</h4> <span class="fw-bold fs-3">{{$earring->price}} €</span>

                    <div class="card_actions d-flex py-3">
                        <a class="btn btn-outline ms-auto me-2" href="{{route('earrings.show', $earring->id)}}">Show
                            details</a>
                        <a class="btn buy_now me-3" href="#">Buy now!</a>
                    </div>
                    <!-- card_actions -->
                </div>
                <!-- card_body -->
            </div>
        </div>

        @empty
        <h3>Sorry, no earrings available in this section!</h3>
        @endforelse
        <!------------- for loop EARRINGS column------------->
    </div>

</div>
@endsection