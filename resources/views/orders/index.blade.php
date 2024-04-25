<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($Orders as $item)
        <div class="shadow">
            <p>{{ $item->name }}</p>
            <p>{{ $item->email }}</p>
            <p>{{ $item->total }}</p>
        </div>
    @endforeach
</body>

</html>
