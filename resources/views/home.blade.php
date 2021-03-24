<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <style>
        body{
            background-color: coral;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ Name: $user['name'] }} <br>
                        {{ Email: $user['email'] }} <br>
                        {{ Password: $user['password'] }} <br>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
