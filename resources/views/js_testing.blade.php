<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Javascript testing</title>
</head>

<body>
  @php
    $name = 'Elitedev Emon';
  @endphp

  <script>
    let name = @json($name);
    let name2 = {{ Js::from($name) }}
    console.log(name);
    console.log(name2);
  </script>
</body>

</html>
