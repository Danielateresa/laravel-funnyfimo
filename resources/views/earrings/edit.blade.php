@extends('layouts.app')

@section('title')
Edit earring
@endsection

@section('content')
<div class="container py-5">
    <h2>Edit earring</h2>

    @include('partials.errors')

    <form action="{{route('earrings.update', $earring->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                aria-describedby="helpId" value="{{old('name',$earring->name)}}">
        </div>
        @error('name')
        <div class="alert alert-danger">{{$message}}
        </div>
        @enderror
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="number" step="1" name="code" id="code" class="form-control @error('code') is-invalid @enderror"
                aria-describedby="helpId" value="{{old('code',$earring->code)}}">
        </div>
        @error('code')
        <div class=" alert alert-danger">{{$message}}
        </div>
        @enderror
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price"
                class="form-control @error('price') is-invalid @enderror" aria-describedby="helpId"
                value="{{old('price',$earring->price)}}">
        </div>
        @error('price')
        <div class=" alert alert-danger">{{$message}}
        </div>
        @enderror
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description"
                class="form-control @error('description') is-invalid @enderror" aria-describedby="helpId"
                value="{{old('description',$earring->description)}}">
        </div>
        @error('description')
        <div class=" alert alert-danger">{{$message}}
        </div>
        @enderror
        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="text" name="img" id="img" class="form-control @error('img') is-invalid @enderror"
                aria-describedby="helpId" value="{{old('img',$earring->img)}}">
        </div>
        @error('img')
        <div class=" alert alert-danger">{{$message}}
        </div>
        @enderror

        <button type="submit" class="btn btn-primary">Edit earring</button>
    </form>

</div>
@endsection