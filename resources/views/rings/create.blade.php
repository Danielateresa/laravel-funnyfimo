@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2>Create a new ring</h2>
    <form action="{{route('rings.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Product name here"
                aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="number" step="1" name="code" id="code" class="form-control" placeholder="Product code here"
                aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control"
                placeholder="Product price here" aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Size</label>
            <input type="text" step="0.01" name="price" id="price" class="form-control" placeholder="Product size here"
                aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control"
                placeholder="Product description here" aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="text" name="img" id="img" class="form-control" placeholder="Product image here"
                aria-describedby="helpId">
        </div>

        <button type="submit" class="btn btn-primary">Add ring</button>
    </form>

</div>
@endsection