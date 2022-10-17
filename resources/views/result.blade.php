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
                <tr>
                    <td>{{Session::get("review")->class}}</td>
                    <td>{{round(Session::get("review")->confidence*100,2)}}%</td>
                </tr>
            </tbody>
        </table>
    @endif
{{--    {{print_r(Session::get("review") )}}--}}
@endsection
