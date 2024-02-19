@extends('dashboardlayout.app')

@section('content')
    <h1>Create about</h1>

    <form action="{{ route('aboutus.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">title:</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">description:</label>
            <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                value="{{ old('description') }}">
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        {{-- <div class="form-group">
            <label for="description">description:</label>
            <input type="text" description="description" id="description"
                class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}">
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div> --}}

        <div class="form-group">
            <label for="client_image">client_image:</label>
            <input type="file" name="client_image" id="client_image" class="form-control @error('client_image') is-invalid @enderror">
            @error('client_image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create about</button>
    </form>
@endsection
