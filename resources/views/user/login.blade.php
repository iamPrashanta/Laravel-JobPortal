<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="{{ route('user.login.submit') }}" method="POST">
        @csrf
        <input type="email" name="email" value="">
        <input type="password" name="password" value="password">
        <input type="submit">
    </form>
    @if ($errors->has('email'))
        <div class="alert alert-danger">
            {{ $errors->first('email') }}
        </div>
    @endif
</body>

</html>
