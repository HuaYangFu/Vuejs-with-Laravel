<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.js"></script>
</head>
<body>
  
  <div id="app">
    <myheader></myheader>
    <router-view></router-view>
    <myfooter></myfooter>
  </div>

  <script src="{{ asset('js/vue.js') }}"></script>
  <script src="{{ asset('js/vue-router.js') }}"></script>
  <script src="https://unpkg.com/http-vue-loader"></script>
  <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>