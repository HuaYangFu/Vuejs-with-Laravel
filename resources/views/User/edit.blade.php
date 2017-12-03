@extends('layouts.app')

@section('content')
  <div class="container">
      <form role="form" action="/Edit" method="post">
      	{{ csrf_field() }}
      	<h2>Edit User</h2>
        <div class="form-group">
          <label for="Name">Name:</label>
          <input class="form-control" name="name" id="Name" value="{{$User->name}}" placeholder="Enter name">
          <input class="form-control" type="hidden" value="{{$User->id}}" name="id">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
  </div>
@endsection
