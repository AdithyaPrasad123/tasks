@extends('layouts.app')
@section('content')
@if(Session::has('success'))
<p class="alert alert-info">{{ Session::get('success') }}</p>
@endif
<table class="p-3 mt-5 table table-secondary-subtle table-striped bg-secondary-subtle">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Due Date</th>
        <th>Category</th>
        <th colspan="3" class="text-center">Action</th>
    </tr>
    @foreach($tasks as $task)
    <tr>
       
        <td>{{$task->title}}</td>
        <td>{{ \Illuminate\Support\Str::limit($task->description, 15, $end='...') }}</td>
        <td>{{$task->due_date}}</td>
        <td>{{ $task->category ? $task->category->name : 'Uncategorized' }}</td>
        <td><a href="{{route('tasks.show',$task->id)}}" class="btn btn-success">Show</a></td>
        <td><a href="{{route('tasks.edit',$task->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{route('tasks.destroy',$task->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="delete" value="DELETE" class="btn btn-danger">
            </form>
        </td>
       
    </tr>
    @endforeach
</table>
@endsection