@extends('layout')
@section('content')
  <br>
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
      <form class="" action="{{ route('todos.save', ['id'=> $todo->id])}}" method="post">
        {{csrf_field()}}
        <input type="text" class="form-control input-md" placeholder="Update your todo task" name="todo" value="{{ $todo->todo }}">
        <!-- <input type="submit" name="" value="Submit"> -->
      </form>

    </div>
  </div>
  <br>

@stop
