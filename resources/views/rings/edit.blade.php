@extends('layouts.app')

@section('title')
Edit ring DB
@endsection

@section('content')
<div class="container py-5">
    <h2>Edit ring</h2>

    @include('partials.errors')

    <form action="{{route('rings.update', $ring->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name"
                class="form-control @error('name') is-invalid @enderror"" aria-describedby=" helpId"
                value="{{old('name',$ring->name)}}">
        </div>
        @error('name')
        <div class=" alert alert-danger">{{$message}}
        </div>
        @enderror
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="number" step="1" name="code" id="code"
                class="form-control @error('code') is-invalid @enderror"" aria-describedby=" helpId"
                value="{{old('code',$ring->code)}}">
        </div>
        @error('code')
        <div class=" alert alert-danger">{{$message}}
        </div>
        @enderror
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price"
                class="form-control @error('price') is-invalid @enderror"" aria-describedby=" helpId"
                value="{{old('price',$ring->price)}}">
        </div>
        @error('price')
        <div class=" alert alert-danger">{{$message}}
        </div>
        @enderror
        <div class="mb-3">
            <label for="size" class="form-label">Size</label>
            <input type="text" step="0.01" name="size" id="size"
                class="form-control @error('size') is-invalid @enderror"" aria-describedby=" helpId"
                value="{{old('size',$ring->size)}}">
        </div>
        @error('size')
        <div class=" alert alert-danger">{{$message}}
        </div>
        @enderror
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description"
                class="form-control @error('description') is-invalid @enderror"" aria-describedby=" helpId"
                value="{{old('description',$ring->description)}}">
        </div>
        @error('description')
        <div class=" alert alert-danger">{{$message}}
        </div>
        @enderror
        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="text" name="img" id="img"
                class="form-control @error('img') is-invalid @enderror"" aria-describedby=" helpId"
                value="{{old('img',$ring->img)}}">
        </div>
        @error('img')
        <div class=" alert alert-danger">{{$message}}
        </div>
        @enderror

        <button type="submit" class="btn btn-primary">Edit ring</button>
    </form>

</div>
@endsection