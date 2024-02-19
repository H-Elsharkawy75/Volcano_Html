@extends('dashboardlayout.app')

@section('content')
    <h1>services</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('services.create') }}" class="btn btn-primary">Create service</a>

    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                {{-- @dd($service->image) --}}
                <tr>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>
                        @if ($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" width="50">
                        @else
                            No image uploaded
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('services.edit', $service) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('services.destroy', $service) }}" method="post"
                            style="display: inline-block">
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
