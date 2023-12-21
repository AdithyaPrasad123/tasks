@extends('login.index')
@section('content')
<form action="{{route('login.dologin')}}" method="POST" class="mt-5 p-3 bg-secondary-subtle">
    @csrf
    <input type="email" name="email" class="form-control" placeholder="Enter the Email Id as Username"><br>
    <input type="password" name="password" class="form-control" placeholder="Enetr the Password"><br>
    <input type="submit" class="btn btn-primary">
</form>
@endsection