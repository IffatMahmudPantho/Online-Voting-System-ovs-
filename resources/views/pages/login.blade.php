@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>
    
<!-- Bootstrap core CSS -->
<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
</head>


<body class="text-center">
<form class="form-signin">
  <img class="mb-4" src="https://png.pngtree.com/svg/20161229/_username_login_1172579.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please log in here : </h1>
  <label for="username" class="sr-only">Username</label>
  <input type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>


  <form method ="get" action ="/user.ovs">
    <button type = "submit" class ="btn btn-primary">Login</button>
  </form>
  
</form>


@endsection
