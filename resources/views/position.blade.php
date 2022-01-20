<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Position</title>
</head>
<body>
  <nav>
    <ul>
      <li><a href="{{route('home')}} ">Home</a></li>
      <li><a href="{{route('description')}}">Chi siamo</a></li>
      <li><a href="{{route('position')}}">Dove trovarci</a></li>
    </ul>
  </nav>
  <h1>Dove trovarci</h1>
  <h2>Sede principale:</h2>
  <p>{{$city}}, {{$street}} numero {{$number}}, {{$country}} </p>

  <h2>Fliliali:</h2>
  <ul>
    @foreach ($branches as $branche)
      <li>{{$branche}} </li>
    @endforeach
  </ul>
  
</body>
</html>