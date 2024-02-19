@extends('dashboardlayout.app')

@section('content')
    <h1>Edit about</h1>

    <form action="{{ route('aboutus.update', $about) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">title:</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                value="{{ $about->title }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">description:</label>
            <input type="text" name="description" id="description"
                class="form-control @error('description') is-invalid @enderror" value="{{ $about->description }}">
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            @if ($about->client_image)
                <img src="{{ asset('storage/' . $about->client_image) }}" alt="{{ $about->name }}" width="50">
            @endif
            <br>
            <label for="client_image">Change client_image:</label>
            <input type="file" name="client_image" id="client_image"
                class="form-control @error('client_image') is-invalid @enderror">
            @error('client_image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update about</button>
    </form>
@endsection
