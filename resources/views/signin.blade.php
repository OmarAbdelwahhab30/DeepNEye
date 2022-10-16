@extends("includes.auth.app")
@section('title', 'Sign-In')
@section("content")
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
@endsection
