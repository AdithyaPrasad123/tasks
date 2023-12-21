@extends('layouts.app')
@section('content')
<form action="{{route('tasks.store')}}" method="POST" class="mt-5 p-3 bg-secondary-subtle">
    @csrf
    <h4 class="text-center"><u>Create Your Task</u></h4><br>
    <input type="text" name="title" class="form-control" placeholder="Enter Title For the Task" required ><br>
    <textarea name="description" class="form-control" placeholder="Enter Description for the Task" required></textarea><br>
    <input type="date" name="due_date" class="form-control" placeholder="Enter Due Date of The Task" required><br>
    <label for="category_id">Category:</label>
        <select name="category_id">
            <option value="" selected>Uncategorized</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select><br><br>
    <input type="submit" class="btn btn-primary">
</form><br>
<a href="{{ route('tasks.index') }}" class="btn btn-primary">Back</a>
@endsection
