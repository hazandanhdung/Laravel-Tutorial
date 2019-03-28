    @extends("layouts.app")
    @section("content")
        <h2>{{$title}}</h2>
        <div class="text-center jumbotron">
            <h1>Welcome to Laravel</h1>
            <p>This is Laravel application from the "Laravel" From Scratch" Youtube series</p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        </div>
    @endsection
