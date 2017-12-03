@extends('layouts.app')

@section('content')
  <div class="container">
    <p><a class="btn btn-primary" href="/CreateView">create</a></p>
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($Users as $User)
      <tr>
        <td>{{$User->id}}</td>
        <td>{{$User->name}}</td>
        <td><a class="btn btn-warning" href="/Edit/{{$User->id}}">edit</a></td>
        <td><a class="btn btn-danger" href="/User/{{$User->id}}">delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{!! $Users->previousPageUrl() !!}">Previous</a></li>
        @for ($i = 1 ; $i < $Users->count() -1 ; $i++)
            <li class="page-item"><a class="page-link" href="{!! $Users->url($i) !!}">{{ $i }}</a></li>
        @endfor
        <li class="page-item"><a class="page-link" href="{!! $Users->nextPageUrl() !!}">Next</a></li>
      </ul>
  </nav>
  
  </div>
@endsection
