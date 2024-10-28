<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Foreach loop variable testing</title>
</head>

<body>
  @foreach ($names as $name)
    <ul>
      @if ($loop->even)
        <li style="color: yellow">{{ $loop->index }} - {{ $name }}</li>
        <li style="color: red">{{ $loop->iteration }} - {{ $name }}</li>
      @endif
      @if ($loop->odd)
        <li style="color: mediumpurple">{{ $loop->index }} - {{ $name }}</li>
        <li style="color: purple">{{ $loop->iteration }} - {{ $name }}</li>
      @endif
    </ul>
  @endforeach
</body>

</html>
