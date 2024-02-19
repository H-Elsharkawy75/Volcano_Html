@extends('dashboardlayout.app')

@section('content')
    <h1>Create team</h1>

    <form action="{{ route('teams.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="member_name">member_name:</label>
            <input type="text" name="member_name" id="member_name"
                class="form-control @error('member_name') is-invalid @enderror" value="{{ old('member_name') }}">
            @error('member_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="member_role">member_role:</label>
            <input type="text" name="member_role" id="member_role"
                class="form-control @error('member_role') is-invalid @enderror" value="{{ old('member_role') }}">
            @error('member_role')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="member_facebook">member_facebook:</label>
            <input type="text" name="member_facebook" id="member_facebook"
                class="form-control @error('member_facebook') is-invalid @enderror" value="{{ old('member_facebook') }}">
            @error('member_facebook')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="member_twitter">member_twitter:</label>
            <input type="text" name="member_twitter" id="member_twitter"
                class="form-control @error('member_twitter') is-invalid @enderror" value="{{ old('member_twitter') }}">
            @error('member_twitter')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="member_linkedin">member_linkedin:</label>
            <input type="text" name="member_linkedin" id="member_linkedin"
                class="form-control @error('member_linkedin') is-invalid @enderror" value="{{ old('member_linkedin') }}">
            @error('member_linkedin')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="member_gmail">member_gmail:</label>
            <input type="text" name="member_gmail" id="member_gmail"
                class="form-control @error('member_gmail') is-invalid @enderror" value="{{ old('member_gmail') }}">
            @error('member_gmail')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="member_image">member_image:</label>
            <input type="file" name="member_image" id="member_image"
                class="form-control @error('member_image') is-invalid @enderror">
            @error('member_image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create team</button>
    </form>
@endsection
