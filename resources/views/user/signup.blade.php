<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Signup</title>
</head>

<body>
    <h1>Signup</h1>
    <form action="{{ route('user.signup.submit') }}" method="POST">
        @csrf
        <input type="name" name="name" value="">
        <input type="email" name="email" value="">
        <input type="password" name="password" value="">
        <input type="submit">
    </form>
</body>

</html>
