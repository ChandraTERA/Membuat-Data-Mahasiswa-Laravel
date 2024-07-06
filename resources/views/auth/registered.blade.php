{{-- <form  action="{{ route('register-success') }}" method="POST">
      @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>            
        @endif

      @csrf

      <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" autofocus>
            @error('username')
            <span>{{ $message }}</span>  
            @enderror  
      </div>
      <br>
      <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            @error('email')  
            <span>{{ $message }}</span>  
            @enderror
      </div>
      <br>

      <div>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password">
            @error('password')  
                  <span class="error-msg">{{ $message }}</span>  
            @enderror
      </div>
      <br>

      <!-- input untuk waktu_sekarang di sini, bisa diisi oleh sistem -->
      <input type="submit" value="Registrasi">
  </form>
 --}}


 {{-- <x-guest-layout>
    <form method="POST" action="{{ route('register-success') }}">
        
        @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session:get('success') }}
        </div>            
        @endif

        @csrf --}}
        <!-- Name -->
        {{-- <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div> --}}

        <!-- Email Address -->
        {{-- <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}

        <!-- Password -->
        {{-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> --}}

        <!-- Confirm Password -->
        {{-- <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div> --}}

        {{-- <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}