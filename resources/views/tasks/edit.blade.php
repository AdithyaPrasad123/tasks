@extends('layouts.app')
@section('content')
<form action="{{route('tasks.update',$task->id)}}" method="POST" class="mt-5 p-3 bg-secondary-subtle">
    @csrf
    @method('PUT')
    <h4 class="text-center"><u>Update Your Task</u></h4><br>
    <input type="text" name="title" class="form-control" value="{{$task->title}}"><br>
    
    <textarea name="description" class="form-control" rows="10" cols="30">{{$task->description}}</textarea><br>
    <input type="date" name="due_date" class="form-control" value="{{$task->due_date}}"><br>
    <select name="category_id">
            <option value="" selected>Uncategorized</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id === $task->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    <input type="submit" class="btn btn-primary" value="UPDATE">
</form>
<a href="{{ route('tasks.index') }}" class="btn btn-primary">Back</a>
@endsection