@extends('layout')
@section('content')
  <br>
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
      <form class="" action="/create/todos" method="post">
        {{csrf_field()}}
        <input type="text" class="form-control input-md" placeholder="Create your todo task" name="todo" value="">
        <!-- <input type="submit" name="" value="Submit"> -->
      </form>

    </div>
  </div>
  <br>


  @foreach($todos as $todo)
    {{$todo->todo}} <a href="{{route('todo.delete', ['id'=> $todo->id])}}" type="button" class="button btn btn-danger btn-md" name="button"> X </a>
    <a href="{{route('todo.update', ['id'=> $todo->id])}}" type="button" class="button btn btn-info btn-md" name="button"> UPDATE </a>
    @if(!$todo->completed)
      <a href="{{ route('todos.completed', ['id' => $todo->id]) }}" class="btn btn-md btn-success">Mark as completed</a>
    @else
      <span class="text-success">COMPLETED</span>
    @endif
    <hr>
  @endforeach

@stop
