@extends("includes.auth.app")
@section('title', 'Sign-Up')
@section("content")
    <div class="sign-form">
        <div class="logo">
            <img src="{{asset("/images/medical.jpg")}}" alt="">
        </div>
        <div class="register">
            <form  action="{{route("signup")}}" method="post" >
                @csrf
                <input class="form-control" type="text" name="name" placeholder="Enter Name">
                @error('name')
                <div class="alert alert-danger text-center m-4">
                    {{ $message }}
                </div>
                @enderror
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
                    <button class="sign" type="submit">Sign Up</button>
                    <a class="sign-in" href="{{ route('signin.page') }}">Are you have an account?</a>
                </div>
            </form>

        </div>

    </div>
@endsection
