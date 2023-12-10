@extends('layout')
{{-- content to view all books with rating and voters started here --}}
@section('content')
    <h1 class="text-center">Book Lists</h1>
    {{-- filter: start --}}
    <form action="{{ url('/') }}" method="GET">
        <div class="row mb-2">
            {{-- range of data shown: start --}}
            <div class="col-6 mb-2">
                <label for="show" class=" form-label">List Show</label>
                <select name="show" id="show" class="form-select">
                    @for ($i = 10; $i <= 1000; $i += 10)
                        <option value="{{ $i }}" {{ request('show') == $i ? 'selected' : '' }}>
                            {{ $i }}
                        </option>
                    @endfor
                </select>
            </div>
            {{-- range of data shown: end --}}
            {{-- search: start --}}
            <div class="col-6 mb-2">
                <label for="search" class="form-label">Search</label>
                <input class="form-control" type="text" name="search" id="search" value="{{ request('search') }}">
            </div>
            {{-- search: end --}}
        </div>
        {{-- submit button: start --}}
        <div class="mb-4 d-grid"><button type="submit" class="btn btn-primary">Submit</button></div>
        {{-- submit button: end --}}
    </form>
    {{-- filter: end --}}

    {{-- book table: start --}}
    <table class="table">
        <thead class="sticky-top">
            <tr>
                <th>No</th>
                <th>Book Name</th>
                <th>Category Name</th>
                <th>Author Name</th>
                <th>Average Rating</th>
                <th>Voter</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->category->name }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>{{ number_format($book->average_rating, 2) }}</td>
                    <td>{{ $book->voter_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- book table: end --}}

    {{-- pagination: start --}}
    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                {{ $books->appends(request()->input())->links('pagination::bootstrap-5') }}
            </ul>
        </nav>
    </div>
    {{-- pagination: end --}}
@endsection
{{-- content to view all books with rating and voters ended here --}}
