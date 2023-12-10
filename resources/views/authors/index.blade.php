@extends('layout')
{{-- content to view top authors started here --}}
@section('content')
    <h1 class="text-center">Top Authors</h1>
    {{-- table top author: start --}}
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Author Name</th>
                <th>Total Votes</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($topAuthors as $author)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->total_votes }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No authors found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{-- table top author: end --}}
@endsection
{{-- content to view top authors ended here --}}
