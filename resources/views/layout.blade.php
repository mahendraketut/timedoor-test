<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Timedoor Bookstore</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="TimeDoor">
    <meta name="keywords" content="TimeDoor">
    <meta name="author" content="TimeDoor">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    {{-- Web item started here --}}
    <div class="">
        <div class="container">
            {{-- web navigation started here --}}
            <header class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills gap-3">
                    <li class="nav-item"><a href="{{ route('book.index') }}" class="nav-link active"
                            aria-current="page">Book List</a></li>
                    <li class="nav-item"><a href="{{ route('author.index') }}" class="nav-link active">Top 10 Famous
                            Authors</a></li>
                    <li class="nav-item"><a href="{{ route('rating.create') }}" class="nav-link active">Insert
                            Rating</a></li>
                </ul>
            </header>
            {{-- web navigation ended here --}}
        </div>
        <div class="mx-auto">
            <div class="container">
                {{-- web content started here --}}
                @yield('content')
                {{-- web content ended here --}}
            </div>
        </div>
    </div>
    {{-- Web item ended here --}}

    {{-- Scripts: start --}}
    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    {{-- Scripts: end --}}

</body>

</html>
