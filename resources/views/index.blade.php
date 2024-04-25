<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Board</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="header">
        @include('components.header')
    </div>
    <div class="container">
        @foreach ($Jobs as $item)
            <div>{{ $item->title }}</div>
        @endforeach
    </div>
</body>

</html>
