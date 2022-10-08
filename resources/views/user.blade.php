<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1> Hello, {{ $name }}</h1>

  @php
    $variable = 'Hello, Variable';
    $vairableEscaped = '<h1>Variable</h1>';
  @endphp

  {{ $variable }}
  <br><br><br>
  Escaped: {{ $vairableEscaped }}
  <br><br>
  Not Escaped: {!! $vairableEscaped !!}
</body>
</html>