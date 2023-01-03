@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Earrings database</h2>

    @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        <strong>{{session('message')}}</strong>
    </div>
    @endif


    <a class="btn btn_pink my-3" href=" {{route('earrings.create')}}">Add earring</a>
    <div class="table-responsive">
        <table class="table border-white">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">code</th>
                    <th scope="col">price</th>
                    <th scope="col">description</th>
                    <th scope="col">image</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($earrings as $earring)
                <tr class="">
                    <td scope="row">{{$earring->name}}</td>
                    <td>{{$earring->code}}</td>
                    <td>{{$earring->price}} €</td>
                    <td>{{$earring->description}}</td>
                    <td><img class="table_img" src="{{$earring->img}}" alt="{{$earring->name}}"></td>
                    <td><a class="btn btn-outline-light w-75 ms-3"
                            href="{{route('earrings.show', $earring->id)}}">Show</a>
                        <a class="btn btn-outline-light  w-75 ms-3 my-2"
                            href="{{route('earrings.edit', $earring->id)}}">Edit</a>
                        <form action="{{route('earrings.destroy', $earring->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-light  w-75 ms-3" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <h3>Sorry, no earrings on database yet!</h3>
                @endforelse
            </tbody>
        </table>
    </div>


</div>
@endsection