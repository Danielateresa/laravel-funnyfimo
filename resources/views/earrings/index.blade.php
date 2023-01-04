@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center pb-5">Welcome to FunnyFimo Shop!</h1>

    <h3>Handmade earrings</h3>
    <p>All earrings are completely handmade from hypoallergenic and durable materials.</p>

    <div class="row">
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
        <!-- for loop column-->

        @empty
        <h3>Sorry, no earrings available in this section!</h3>
        @endforelse
    </div>

</div>
@endsection