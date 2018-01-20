@extends('layouts.app')

@section('content')

<body style="background: url(img/asd.jpg) no-repeat center center fixed;
  -webkit-background-size:-cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
<div class="jumbotron" style="background: transparent;">
        <font color="aqua"><h1><center>^W^ <u>Welcome To Main Menu</u> ^W^</h1></center>
        <p class="lead">If You want To Know Me.</p>
        <p><a class="btn btn-lg btn-success" href="6" role="button">About</a></p>
      </div>
 
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-3">
          <h2>Gallery</h2>
          <img src="img/a1.gif" class="img-thumbnail " alt="a1" style="max-height: 240px;max-width: 180px;">
          <p>You can See Any Photo Here. </p>
          <p><a class="btn btn-primary" href="2" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-3">
          <h2>Data Table</h2>
          <img src="img/a2.gif" class="img-thumbnail " alt="a1" style="max-height: 150px;max-width: 150px;">
          <p>You Can See My Data Table Here. </p>
          <p><a class="btn btn-primary" href="3" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-lg-3">
          <h2>Paragraph</h2>
          <img src="img/a3.gif" class="img-thumbnail " alt="a1" style="max-height: 240px;max-width: 180px;">
          <p>You Can See My Paragraph Here.</p>
          <p><a class="btn btn-primary" href="4" role="button">View details &raquo;</a></p>
        </div>
		<div class="col-lg-3">
          <h2>Marvel</h2>
          <img src="img/a4.gif" class="img-thumbnail " alt="a1" style="max-height: 240px;max-width: 180px;">
          <p>You Can See Marvel Article Here.</p>
          <p><a class="btn btn-primary" href="5" role="button">View details &raquo;</a></p>
        </div>
      </div>
      </font>
</body>

@endsection
