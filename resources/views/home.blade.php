@extends("includes.app")
@section('title', 'Home')
@section("content")
<div class="home-div">
    <form style="height: auto" action="{{route("image.upload")}}" method="post" enctype="multipart/form-data">
        @csrf
        @include("alerts")
        <input type="file" name="image">
        <div class="text-center mb-3" style="text-align: center; margin-bottom: 10px">
            <button type="submit" class="upload">Display Result</button>
        </div>
    </form>
</div>
@endsection
