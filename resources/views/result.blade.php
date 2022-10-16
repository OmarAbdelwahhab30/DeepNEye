@extends("includes.app")
@section('title', 'Result')
@section("content")
    @if(Session::has("review"))
        <table class="table">
            <thead>
            <tr>
                <th scope="col">class</th>
                <th scope="col">confidence</th>
            </tr>
            </thead>
            <tbody>
            @foreach(Session::get("review") as $rev)
                <tr>
                    <td>{{$rev->class}}</td>
                    <td>{{$rev->confidence}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
