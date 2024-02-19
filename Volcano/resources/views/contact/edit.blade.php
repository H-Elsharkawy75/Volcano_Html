@extends('dashboardlayout.app')

@section('content')
    <h1>Edit service</h1>

    <form action="{{ route('services.update', $service) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $service->name }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            @if ($service->image)
                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" width="50">
            @endif
            <br>
            <label for="image">Change Image:</label>
            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update service</button>
    </form>
@endsection
