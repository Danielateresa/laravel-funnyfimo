@extends('layouts.app')

@section('title')
Ring db
@endsection

@section('content')
<div class="container py-5">
    <h1 class="text-center">Rings database</h1>

    @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        <strong>{{session('message')}}</strong>
    </div>
    @endif

    <div class="d-flex justify-content-end pe-4">
        <a class="btn btn_pink my-3" href=" {{route('rings.create')}}">Add ring</a>
    </div>
    <div class="table-responsive">
        <table class="table border-white">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">code</th>
                    <th scope="col">price</th>
                    <th scope="col">size</th>
                    <th scope="col">description</th>
                    <th scope="col">image</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($rings as $ring)
                <tr class="">
                    <td scope="row">{{$ring->id}}</td>
                    <td>{{$ring->name}}</td>
                    <td>{{$ring->code}}</td>
                    <td>{{$ring->price}} €</td>
                    <td>{{$ring->size}}</td>
                    <td>{{$ring->description}}</td>
                    <td><img class="table_img" src="{{$ring->img}}" alt="{{$ring->name}}"></td>
                    <td><a class="btn btn-light w-75 ms-3" href="{{route('rings.show', $ring->id)}}">Show</a>
                        <a class="btn btn_edit  w-75 ms-3 my-2" href="{{route('rings.edit', $ring->id)}}">Edit</a>
                        <form action="{{route('rings.destroy', $ring->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn_dark_pink  w-75 ms-3" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <h3>Sorry, no rings on database yet!</h3>
                @endforelse
            </tbody>
        </table>
    </div>


</div>
@endsection