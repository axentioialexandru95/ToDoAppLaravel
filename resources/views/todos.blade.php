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
    {{$todo->todo}} <a href="{{route('todo.delete', ['id'=> $todo->id])}}" type="button" class="button btn btn-danger" name="button"> X </a>
    <hr>
  @endforeach

@stop
