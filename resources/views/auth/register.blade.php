<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Register Chandra</title>
  <link rel="stylesheet" href="{{ asset ('assets/css/login.css') }}" type="text/css">
</head>

<body>
  <div class="wrapper">
    <form method="POST" action="{{ route('register-success') }}">
      <h2>Register</h2>
      
      @if (Session::has('Success')) 
        <div class="alert alert-success" role="alert">
            {{Session::get ('success')}}
        </div>
      @endif

      @csrf
      <div class="input-field">
          <input type="text" id="username" name="username" autofocus required>
          <label for="username">Username</label>
        @error('username')
                <span>{{ $message }}</span>  
        @enderror  
      </div>

      <div class="input-field">
          <input type="email" id="email" name="email" autofocus required>
          <label for="email">Email</label>
          @error('email')
      <span>{{ $message }}</span>  
      @enderror  
    </div>

    {{-- <div class="input-field">
      <input type="email" id="email_verified" name="email_verified" autofocus required>
      <label for="email_verified">Email Verifikasi</label>
      @error('email_verified')
  <span>{{ $message }}</span>  
  @enderror  
</div> --}}


      <div class="input-field">
          <input type="password" id="password"  name="password" required >
          <label for="password">Masukan Password</label>
        @error('password')
            <span>{{ $message }}</span>  
        @enderror
    </div>


      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember" name="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit">Register</button>
      <div class="register">
        <p>Do you have account ? <a href="{{ route ('login') }}">Login</a></p>
      </div>
    </form>
  </div>
</body>
</html>
