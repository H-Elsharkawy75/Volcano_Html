@extends('dashboardlayout.app')

@section('content')
    <h1>aboutus</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('aboutus.create') }}" class="btn btn-primary">Create About</a>

    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($aboutus as $about)
                <tr>
                    <td>{{ $about->title }}</td>
                    <td>{{ $about->description }}</td>
                    <td>
                        @if ($about->client_image)
                            <img src="{{ asset('storage/' . $about->client_image) }}" alt="{{ $about->title }}" width="50">
                        @else
                            No image uploaded
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('aboutus.edit', $about) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('aboutus.destroy', $about) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
