@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create a new ring</h2>
    <form action="{{route('rings.update', $ring->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" aria-describedby="helpId"
                value="{{$ring->name}}">
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="number" step="1" name="code" id="code" class="form-control" aria-describedby="helpId"
                value="{{$ring->code}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" aria-describedby="helpId"
                value="{{$ring->price}}">
        </div>
        <div class="mb-3">
            <label for="size" class="form-label">Size</label>
            <input type="text" step="0.01" name="size" id="size" class="form-control" aria-describedby="helpId"
                value="{{$ring->size}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" aria-describedby="helpId"
                value="{{$ring->description}}">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="text" name="img" id="img" class="form-control" aria-describedby="helpId"
                value="{{$ring->img}}">
        </div>

        <button type="submit" class="btn btn-primary">Edit ring</button>
    </form>

</div>
@endsection