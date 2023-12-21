@extends('layouts.app')
@section('content')
@if(Session::has('success'))
<p class="alert alert-info">{{ Session::get('success') }}</p>
@endif

<form action="{{route('category.doregister')}}" method="POST" class="mt-5 p-3 bg-secondary-subtle">
    @csrf
    <h3><u>Add Category</u></h3><br>
    <input type="text" name="name" class="form-control" placeholder="Enter the Name"><br>
    <input type="submit" class="btn btn-primary">
</form>
@endsection