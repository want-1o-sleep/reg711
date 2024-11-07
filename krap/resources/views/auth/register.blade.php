<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form method="Post" action="{{ route('register')}}">
        @csrf
        <lable>Name:</lable>
        <input type ="text" name="name" id= "name" required>
        <br>
        <lable>Email:</lable>
        <input type ="email" name="email" id= "email" required>
        <br>
        <lable>Password:</lable>
        <input type = "password" name="password" id= "password" required>
        <br>
        <lable>Password 2:</lable>
        <input type ="password" name="password_confirmation" id= "password" required>   
        <br>
        <button type='submit'>Register</button>
        </form>
</body>
</html>