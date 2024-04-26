<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Board</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css">
    @vite('resources/css/app.css')
</head>

<body>
    @foreach ($Jobs as $item)
        <p>{{ $item->title }}</p>
        <p>{{ $item->description }}</p>
        <p>{{ $item->salary }}</p>
    @endforeach
</body>

</html>
