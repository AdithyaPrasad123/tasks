@extends('layouts.app')
@section('content')

<div class="card mt-5 bg-secondary-subtle" style="width: 50rem;">
  <ul class="list-group list-group-flush">
  <li class="list-group-item text-center"><strong><u>{{$task->title }}</u></strong></li>
  <li class="list-group-item">{{$task->category ? $task->category->name : 'Uncategorized' }}</li>
    <form method="POST">
                @csrf
                <textarea name="description" class="form-control" rows="15" cols="30">{{$task->description}}</textarea>
            </form>
    <li class="list-group-item"><strong>Due:Date</strong>{{$task->due_date }}</li>
    
    
  </ul>
</div><br>
<a href="{{ route('tasks.index') }}" class="btn btn-primary">Back</a>
@endsection