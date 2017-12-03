@extends('layouts.app')

@section('content')
  <div class="container">
      <form role="form" action="/Create" method="post">
      	{{ csrf_field() }}
        <h2>Create User</h2>
        <div class="form-group">
          <label for="Name">Name:</label>
          <input class="form-control" name="name" id="Name" placeholder="Enter name">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
  </div>
@endsection
