<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

</head>

<body>
    <div class="sign-form">
        <div class="logo">
            <img src="{{asset("/images/medical.jpg")}}" alt="">
        </div>
        <div class="register">
            <form action="{{route("signin")}}" method="post">
                @csrf
                <input type="email" name="email" placeholder="Enter Email">
                @error('email')
                    <div class="alert alert-danger text-center m-4">
                        {{ $message }}
                    </div>
                @enderror
                <input type="password" name="password" placeholder="Enter Password">
                @error('password')
                    <div class="alert alert-danger text-center m-4">
                        {{ $message }}
                    </div>
                @enderror
                <div class="text-center">
                    <button class="sign" type="submit">Sign In</button>
                    <a class="sign-up" href="{{ route('index') }}">Don't have an account?</a>
                </div>
            </form>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

        <script src="{{ asset('js/all.min.js') }}"></script>


</body>

</html>