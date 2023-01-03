@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create a new earrings</h2>
    <form action="{{route('earrings.update', $earring->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" aria-describedby="helpId"
                value="{{$earring->name}}">
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="number" step="1" name="code" id="code" class="form-control" aria-describedby="helpId"
                value="{{$earring->code}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" aria-describedby="helpId"
                value="{{$earring->price}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" aria-describedby="helpId"
                value="{{$earring->description}}">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="text" name="img" id="img" class="form-control" aria-describedby="helpId"
                value="{{$earring->img}}">
        </div>

        <button type="submit" class="btn btn-primary">Edit earring</button>
    </form>

</div>
@endsection