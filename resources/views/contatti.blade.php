<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contatti</title>
</head>
<body>
  <nav>
    <ul>
      <li><a href="{{route('home')}} ">Home</a></li>
      <li><a href="{{route('description')}}">Chi siamo</a></li>
      <li><a href="{{route('position')}}">Dove trovarci</a></li>
      <li><a href="{{route('contatti')}} ">Contatti</a></li>
    </ul>
  </nav>
  <h1>Contatti:</h1>
  <ul>
    <li>Telefono: {{$telephone}} </li>
    <li>Fax: {{$fax}} </li>
    <li>@if (strpos($email, '@'))
      Email: {{$email}}
    @else
      Email non presente
    @endif </li>
  </ul>
</body>
</html>