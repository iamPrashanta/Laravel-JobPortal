<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>

<body>
    <h1>Hello from DashBoard</h1>

    @if (Auth::check())
        <p>Welcome, {{ Auth::user()->name }}</p>
    @else
        <p>You are not logged in.</p>
    @endif

</body>

</html>
