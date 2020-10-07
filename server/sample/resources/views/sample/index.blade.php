<html>
    <body>
        <h1>sample#index</h1>
        <p>{{$msg}}</p>
            <form method="POST" action="/sample">
                @csrf
                <input type="text" name="msg">
                <input type="submit">
            </form>
    </body>
</html>