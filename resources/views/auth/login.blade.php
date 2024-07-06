<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login Chandra</title>
  <link rel="stylesheet" href="{{ asset ('assets/css/login.css') }}" type="text/css">
</head>

<body> 
  <div class="wrapper">
    <form method="POST" action="{{ route ('login-success') }}">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $item)
              <li>{{ $item }}</li>    
            @endforeach
          </ul>
      </div>
      @endif
      
      <h2>Login</h2>
      @csrf 
        <div class="input-field">
        <input type="text" @error('email') is-invalid
        @enderror id="email" name="email" autofocus>
        <label for="email">Enter your email</label>
          @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
      </div>
      <div class="input-field">
        <input type="password" id="password" name="password">
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember" name="remember">
          <p>{{ __ ('Remember Me') }}</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="{{ route ('register') }}">Register</a></p>
      </div> 
      


    </form>
  </div>


 








