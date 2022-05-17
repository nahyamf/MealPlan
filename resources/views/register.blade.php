@extends('layout/layout')
@section('container')
    <div class="center">
    <h1>Register</h1>
      <form method="post">
      <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Register">
        <div class="signup_link">
          Already a member? <a href="/"><b>Login</b></a>
        </div>
      </form>
    </div>    
@endsection()