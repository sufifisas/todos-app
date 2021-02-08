<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Todos App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item @yield('home')">
              <a class="nav-link" href="/todos">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @yield('create')">
              <a class="nav-link" href="/new-todos">Create todo</a>
            </li>
           
        </div>
      </nav>
    <div class="container">
      @if (session()->has('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
          
      @endif
        @yield('content')
    </div>
</body>
</html>