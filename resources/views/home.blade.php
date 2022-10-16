<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .home-div{
            margin-top: 10% ;
            margin-left: 38%;
        }
        .home-div form{
            border: 2px solid rgb(68, 89, 224);
            width: 400px;
            height: 200px;
            border-radius: 10px;
            background-color: rgb(90, 176, 203);
        }
        .home-div form input{
            margin: 30px auto;
            display: block;
        }

        .home-div form button{
            border-radius: 10px;
            border: 2px solid rgb(79, 85, 120);
            background-color: rgb(26, 71, 153);
            color: white;
            margin-top: 10px ;
            margin-left: 20%;
            width: 250px;
            font-weight: bold;
        }
        .home-div form button:hover{
            background-color: rgb(37, 115, 205);
        }

    </style>
    <title>Document</title>
</head>
<body>
    <div class="home-div">
        @include("alerts")
        <form method="post" action="{{route("image.upload")}}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image">
            <button type="submit">Upload</button>
        </form>
    </div>

    <form method="post" action="{{route("signout")}}">
        @csrf
        <div class="text-center mt-3">
            <button class="btn btn-danger" type="submit">Signout</button>
        </div>
    </form>


{{--        @if(Session::has("response"))--}}
{{--            <div class="alert alert-secondary">--}}
{{--                {{Session::get("response")}}--}}
{{--            </div>--}}
{{--        @endif--}}


</body>
</html>
