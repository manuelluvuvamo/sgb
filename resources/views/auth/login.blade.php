{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="identity" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
 --}}

 <!DOCTYPE html>
 <html lang="en" class="h-100">
 
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="keywords" content="" />
     <meta name="author" content="" />
     <meta name="robots" content="" />
     <meta name="viewport" content="width=device-width,initial-scale=1">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="Sistema de Gestão Bibliotecária: " />
     <meta property="og:title" content="Sistema de Gestão Bibliotecária" />
     <meta property="og:description" content="Sistema de Gestão Bibliotecária" />
    
     <meta name="format-detection" content="telephone=no">
     <title>SGB - Sistema de Gestão Bibliotecária</title>
     <!-- Favicon icon -->
     <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('xhtml/images/favicon.png') }}">
     <link href="{{ asset('xhtml/css/style.css') }}" rel="stylesheet">
 
 </head>
 
 <body class="vh-100">
     <div class="authincation h-100">
         <div class="container h-100">
             <div class="row justify-content-center h-100 align-items-center">
                 <div class="col-md-6">
                     <div class="authincation-content">
                         <div class="row no-gutters">
                             <div class="col-xl-12">
                                 <div class="auth-form">
                                     <div class="text-center mb-3">
                                         <a href="{{ url('/') }}"><img
                                                 src="{{ asset('xhtml/images/logo.webp') }}" alt="" width="250"></a>
                                     </div>
                                     <h4 class="text-center mb-4">Iniciar Sessão</h4>
                                     <form method="POST" action="{{ route('login') }}">
                                         @csrf
                                         <div class="form-group">
                                             <label class="mb-1"><strong>Email/Nome de Usuário</strong></label>
                                             <input type="text" class="form-control" name="identity"
                                                 value="{{ old('email') }}" required autofocus autocomplete="username">
                                         </div>
                                         <div class="form-group">
                                             <label class="mb-1"><strong>Palavra-passe</strong></label>
                                             <input type="password" class="form-control" name="password" required
                                                 autocomplete="current-password">
                                         </div>
                                         <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                             <div class="form-group">
                                                 <div class="form-check custom-checkbox ms-1">
                                                     <input type="checkbox" class="form-check-input"
                                                         id="basic_checkbox_1" name="remember">
                                                     <label class="form-check-label" for="basic_checkbox_1">Lembrar -
                                                         me</label>
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 {{--   <a href="page-forgot-password.html">Forgot Password?</a> --}}
                                             </div>
                                         </div>
                                         <div class="text-center">
                                             <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                         </div>
                                     </form>
                                     <div class="new-account mt-3">
                                         {{-- <p>Don't have an account? <a class="text-primary" href="./page-register.html">Sign up</a></p> --}}
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 
 
     <!--**********************************
         Scripts
     ***********************************-->
     <!-- Required vendors -->
 
     <script src="{{ asset('xhtml/vendor/global/global.min.js') }}"></script>
     <script src="{{ asset('xhtml/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
 
 
 
 </body>
 
 </html>
 