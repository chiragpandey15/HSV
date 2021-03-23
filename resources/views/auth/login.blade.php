<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
    body{
        background-color: coral;
    }

    button{
        background-color: blue;
        color: white;
        padding: 14px 20px;
        margin: 30px;
        border: none;
        cursor: pointer;
    }

    .button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
    }

    .center{
        text-align:center;
        margin-top:40px;
    }

    .gap{
        margin:15px;
    }
    a{
        text-decoration: none;
        color:white;
    }

    </style>

</head>
<body>
    <div class="center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group gap">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div >
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group gap">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-primary button">
                                        {{ __('Login') }}
                                    </button>

                                    
                                </div>
                            </div>
                        </form>

                        <button class="btn btn-info"><a href="{{ route('register') }}">Register</a> </button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
