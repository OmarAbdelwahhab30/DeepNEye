@extends("includes.app")
@section('title', 'Home')
@section("content")
<div class="home-div">
    <form action="{{route("image.upload")}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        @error('image')
            <div class="alert alert-danger text-center m-4">
                {{ $message }}
            </div>
        @enderror
        <div class="text-center">
            <button type="submit" class="upload">Display Result</button>
        </div>
    </form>
</div>
@endsection
