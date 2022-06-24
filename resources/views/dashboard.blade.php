<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
       <div class="row justify-content-md-center">
            <div class="col">
                <h1>Hello, world!</h1>
                <p>{{ auth()->user()->email }}</p>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display:none">@csrf</form>
                <a href="{{ route('logout') }}" type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">cerrar sesion</a>
            </div>
        </div> 
    </div>
  </body>
</html>