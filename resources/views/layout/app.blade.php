<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Personal Todo List</title>
</head>
<body>
  <h1>@yield('title')</h1>

  <div>
    @if (session()->has('success'))
      <div>{{ session('success') }}</div>
    @endif

    @if (session()->has('failed'))
      <div>{{ session('failed') }}</div>
    @endif
  </div>

  <div>
    @yield('content')
  </div>
</body>
</html>