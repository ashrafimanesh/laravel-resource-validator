<html>
    <head>

    </head>
    <body>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{$action}}">
            {{csrf_field()}}
        @if(isset($method))
            <input type="hidden" name="_method" value="{{$method}}"/>
        @endif
            <input type="text" name="title">
            <input type="submit">
        </form>
    </body>
</html>