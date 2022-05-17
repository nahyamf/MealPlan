@extends('layout/layout')
@section('container')
    <div class="splash text-center">
        <h1 class="fade-in">MealPlan</h1>
    </div>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="/register"><b>Register</b></a>
        </div>
      </form>
    </div>
@endsection()