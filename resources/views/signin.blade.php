<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototype</title>
    <style>
        .logo{
        margin-left: 45%;
        margin-top: 10px;
        }
        img{
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .register input{
            width: 300px;
            height: 40px;
            padding-left: 20px;
            display: block;
            margin-bottom: 30px;
            margin-left: auto;
            margin-right: auto;
            border: 2px solid rgb(48, 124, 155) ;
            border-radius: 10px;
            outline:none;

        }

        .register button{
            width: 250px;
            height: 40px;
            border: 2px solid rgb(79, 85, 120);
            background-color: rgb(26, 71, 153);
            color: white;
            cursor: pointer;
            border-radius: 10px;
            margin-left: 42%;
            font-weight: bold;
        }

        .register button:hover{
            background-color: rgb(37, 115, 205);

        }
    </style>
</head>
<body>
    <div>
        <div class="logo">
            <img src="{{asset("/images/medical.jpg")}}" alt="">
        </div>
        <div class="register">
            <form action="{{route("signin")}}" method="post">
                @csrf
            <input type="email" name="email" placeholder="Enter Email">
            <input type="password" name="password" placeholder="Enter Password">
            <button type="submit">Sign in</button>
            </form>
        </div>
    </div>
</body>
</html>
