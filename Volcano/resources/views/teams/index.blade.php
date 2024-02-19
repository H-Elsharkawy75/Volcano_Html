@extends('dashboardlayout.app')

@section('content')
    <h1>teams</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('teams.create') }}" class="btn btn-primary">Create team</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>member_image</th>
                <th>Facebook</th>
                <th>Twitter</th>
                <th>LinkedIn</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
                {{-- @dd($team->image) --}}
                <tr>
                    <td>{{ $team->member_name }}</td>
                    <td>{{ $team->member_role }}</td>

                    <td>
                        @if ($team->member_image)
                        <img src="{{ asset('storage/' . $team->member_image) }}" alt="{{ $team->member_name }}"
                        width="50">
                        @else
                        No member_image uploaded
                        @endif
                    </td>
                    <td>{{ $team->member_facebook }}</td>
                    <td>{{ $team->member_twitter }}</td>
                    <td>{{ $team->member_linkedin }}</td>
                    <td>{{ $team->member_gmail }}</td>
                    <td>
                        <a href="{{ route('teams.edit', $team) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('teams.destroy', $team) }}" method="post" style="display: inline-block">
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
