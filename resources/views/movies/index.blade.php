
@extends('layouts.app')

@section('title', 'Movie List')

@section('content')

    <h2>Movie List</h2>

    <p>
        <a href="{{ route('movies.create') }}" class="btn btn-primary">
            Add Movie
        </a>
    </p>

   <form method="GET" action="{{ route('movies.index') }}" class="row g-2 mb-4">
    <div class="col-md-4">
        <input
            type="text"
            name="search"
            class="form-control"
            placeholder="Search by title..."
            value="{{ $search }}"
        >
    </div>

    <div class="col-md-3">
        <select name="genre" class="form-select">
            <option value="all" @selected($genre === 'all')>All Genres</option>
            @foreach ($genres as $itemGenre)
                <option value="{{ $itemGenre->id }}" @selected((string) $genre === (string) $itemGenre->id)>
                    {{ $itemGenre->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-3">
        <select name="sort" class="form-select">
            <option value="title" @selected($sort === 'title')>Sort by Title</option>
            <option value="director" @selected($sort === 'director')>Sort by Director</option>
        </select>
    </div>

    <div class="col-md-2 d-flex gap-2">
        <button type="submit" class="btn btn-primary">Apply</button>
        <a href="{{ route('movies.index') }}" class="btn btn-outline-secondary">Clear</a>
    </div>
</form>

    <table class="table table-striped table-bordered">
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Title</th>
            <th>Director</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Actions</th>
        </tr>

        @forelse ($movies as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item['id'] }}</td>

                <td>
                    <a href="{{ route('movies.show', $item) }}">
                        {{ $item['title'] }}
                    </a>
                </td>

                <td>{{ $item['director'] }}</td>
                <td>{{ $item->genre->name }}</td>

                <td>
                    {{ $item['year'] }}

                    @if ($item['year'] == 2019)
                        <span class="badge bg-primary">Featured</span>
                    @endif
                </td>

                <td>
                    <a href="{{ route('movies.edit', $item) }}">Edit</a> |

                    <form action="{{ route('movies.destroy', $item) }}"
                          method="POST"
                          style="display: inline;"
                          onsubmit="return confirm('Delete this record?')">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">
                    No movies are available in the collection.
                </td>
            </tr>
        @endforelse

    </table>
    {{ $movies->links() }}

    <p>Queries: {{ count(\Illuminate\Support\Facades\DB::getQueryLog()) }}</p>

@endsection
