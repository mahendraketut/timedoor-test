@extends('layout')
{{-- content to insert rating started here --}}
@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1 class="text-center">Input Rating</h1>

    <form action="{{ route('rating.store') }}" method="post" class="">
        @csrf
        <div class="mb-2">
            <label for="author_id" class="form-label">Author</label>
            <select name="author_id" id="author_id" class="form-control ">
                <option value="">Select an author</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label for="book_id" class="form-label">Book</label>
            <select name="book_id" id="book_id" class="form-select">
                <option value="">Select a book</option>
            </select>
        </div>
        <div class="mb-2">
            <label for="rating" class="form-label">Rating</label>
            <select name="rating" id="rating" class="form-select">
                <option value="">Select a rating</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <div class="mb-4 d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li class="mb-0">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection
{{-- content to insert rating ended here --}}
{{-- script to insert rating started here --}}
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var authorDropdown = document.getElementById('author_id');
            var bookDropdown = document.getElementById('book_id');

            authorDropdown.addEventListener('change', function() {
                var authorId = this.value;

                // Clear existing options
                bookDropdown.innerHTML = '<option value="">Select a book</option>';

                // Load books based on selected author
                if (authorId) {
                    var xhr = new XMLHttpRequest();
                    xhr.open('GET', '/getBook/' + authorId, true);
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            var books = JSON.parse(xhr.responseText);
                            books.forEach(function(book) {
                                var option = document.createElement('option');
                                option.value = book.id;
                                option.text = book.title;
                                bookDropdown.appendChild(option);
                            });
                        }
                    };
                    xhr.send();
                }
            });
        });
    </script>
@endsection
{{-- script to insert rating ended here --}}
