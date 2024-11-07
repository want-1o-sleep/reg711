<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <h2>WElcome, {{ auth()->user()->name }}</h2>
    <form method="POST" action="{{route('logout')}}">
        @csrf
        <button type='submit'>Logout</button>
        </form>
</body>
</html>