@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has("success"))
    <div class="alert alert-success" role="alert">
        {{Session::get("success")}}
    </div>
@endif


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


@if(Session::has("fail"))
    <div class="alert alert-danger" role="alert">
        {{Session::get("fail")}}
    </div>
@endif
