<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('css/home.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/table.css') }}">
    <style>
        .sign-out{
            background-color: inherit;
            color: white;
            border-collapse: collapse;
            margin-left: 5px;
        }
        .sign-out:hover{
            padding: 8px;
            background-color: rgb(64, 149, 205);
        }
        .upload{
            background-color: rgb(10, 44, 95);
            border-radius:10px;
            padding:10px;
            color: white;
        }
        .upload:hover{
            background-color: rgb(64, 149, 205);
        }
    </style>
    <title>@yield('title')</title>
</head>
<body>
<header>
    <img src="{{ asset('images/medical.jpg') }}" alt="">
    <ul>
        <li class="header-li"><a class="home" href="{{ route('home') }}">Home</a></li>

        <li class="header-li">
            <form style="display: inline" method="post" action="{{ route('signout') }}">
                @csrf
                <button class="sign-out">Sign Out</button>
            </form>

        </li>
    </ul>
</header>
@yield("content")
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/all.min.js') }}"></script>
</body>
</html>
