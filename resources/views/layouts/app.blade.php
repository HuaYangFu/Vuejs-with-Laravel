<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
	  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body id="app-layout">
        @include('layouts.head')
    	@yield('content')
    	@include('layouts.foot')
    </body>
</html>