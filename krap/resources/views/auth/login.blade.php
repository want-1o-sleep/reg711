@extends('layouts.app')

    <h2>Login</h2>
    <form method="POST" action="{{route ('login')}}">
        @csrf
        <lable >Email:</lable>
        <input type ="email" name="email" required>
        <br>
        <lable>Password:</lable>
        <input type ="password" name="password" required>
        <br>
        <button type='submit'>Login</button>
</form>
